CREATE OR REPLACE TRIGGER kosar_reset
AFTER INSERT
ON megrendeles
FOR EACH ROW
BEGIN
    UPDATE Rendel SET megrendelt=1;
END;
/

