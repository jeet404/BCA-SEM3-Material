DECLARE 
   c_id customers.id%type := 1; 
   c_sal  customers.salary%type; 
BEGIN 
   SELECT  salary  
   INTO  c_sal 
   FROM customers 
   WHERE id = c_id; 
   IF (c_sal <= 2000) THEN 
      UPDATE customers  
      SET salary =  salary + 1000 
         WHERE id = c_id; 
      dbms_output.put_line ('Salary updated'); 
   END IF; 
END; 
/