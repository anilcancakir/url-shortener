CREATE TRIGGER calculate_url_key_by_id BEFORE INSERT ON urls FOR EACH ROW
EXECUTE PROCEDURE calculate_url_key_by_id();