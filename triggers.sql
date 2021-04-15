DROP TRIGGER before_users_update;
CREATE TRIGGER before_users_update BEFORE
UPDATE
    ON users FOR EACH ROW
INSERT INTO
    my_logs
SET
    table_name = 'users',
    action = 'update',
    record = CONCAT_WS(' <-> ',OLD.name, OLD.email, OLD.PHOTO),
    created_at = NOW(),
    updated_at = NOW();

