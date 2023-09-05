
# Entity-Relationship Diagram
- - - - 

## why ERD? (importance of ERD)
1. **Database Design:** ERD is used during database design which helps in defining the entities (tables), attributes (columns), and the relationships between entities.
2. **Clear Communication**: ERD provide a standard way to communicate with others
## How to make ERD
### ERD Symbols and Notation
<img src = "https://images.edrawsoft.com/articles/er-diagram-symbols/chens-notation-1.png">

### types of attributes
1. Unique: its value isn't repeated
2. Multivalued: can take multiple values such as car color
3. optional: can accept null
4. Composite: consist of another attribute
5. Derived: is derived from other attributes such as deriving age from birth-date (isn't entered by user)
### types of relationships (47)
1 - 1
Each record in one table is associated with only one record in another table, and vice versa.
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMwUciD1qj1LwLOOB7pRwfV0NKhmJB_qL59M-zfGmMnxVdQ48EYonuCLXkqTNXSaKnCw&usqp=CAU">

1 - n
Record in one table is associated with multiple records in another table, but each record in the second table is associated with only one record in the first table.
<img src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZhyS2fZXh3T8VzguV0I7ot1psgwV6WEzx82y5Qe20HTahqrPPgAD1ZgI-Ny9pQgTcRQ&usqp=CAU">

m - n
Multiple records in one table are associated with multiple records in another table. 
To implement this type of relationship, an intermediary or junction table is used.
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9PbK0ZxtGSiujv_auJn6V8kqYgB_w1kDlSGXjk5i9YdlevWNL_7rkVEEB2Q6mytvueQ&usqp=CAU">

# Normalization
- - - -
Normalization is a process in database design that aims to reduce data redundancy and improve data integrity by organizing data into well-structured tables.
1. **First Normal Form (1NF):**
   - The first step in normalization involves ensuring that each attribute (column) of a table contains only atomic values.
   - No attribute should contain multiple values or arrays.
   - This eliminates repeating groups and ensures that each cell in the table contains a single value.
   Ex: If you have a table of customers and their phone numbers, instead of having a single column with multiple phone numbers, you would have a separate row for each phone number associated with a customer.

2. **Second Normal Form (2NF):**
   - 2NF builds on 1NF and focuses on eliminating partial dependencies.
   - A partial dependency occurs when part of a composite primary key determines non-key attributes.
   - To achieve 2NF, separate the data into multiple tables where non-key attributes depend on the entire primary key, not just part of it.
   Ex: If you have a table with orders, where the primary key is a combination of order number and product ID, and the product price depends only on the product ID, you would move the product price into a separate table with the product ID as the primary key.

3. **Third Normal Form (3NF):**
   - 3NF continues the process of eliminating transitive dependencies.
   - A transitive dependency occurs when a non-key attribute depends on another non-key attribute, rather than directly on the primary key.
   - To achieve 3NF, you break down the data even further to remove these indirect dependencies.
   Ex: If you have a table with employee information and the department manager's phone number, where the manager's phone number depends on the department, you would create a separate table for departments and their respective managers.

# SQL
- - - - 
SQL is a programming language specifically designed for managing and manipulating relational databases. It allows various operations on databases, such as creating, updating, querying, and deleting data.

## SQL Commands
<img src="https://www.guru99.com/images/2/sql_commands1.png">

### DDL
DDL stands for Data Definition Language, and is used to define and manage the structure of a database.

1. **CREATE TABLE:**
   Creates a new table along with its columns, data types, constraints.

   Example:
   ```sql
   CREATE TABLE Employees (
       ID INT PRIMARY KEY,
       Name VARCHAR(50),
       Salary VARCHAR(50)
   );
   ```

2. **ALTER TABLE:**
   Modifies an existing table by adding, modifying, or dropping columns and constraints.

   Example:
   ```sql
   ALTER TABLE Employees
   ADD Email VARCHAR(100);
   ```

3. **DROP TABLE:**
   Removes an existing table and all its data permanently.

   Example:
   ```sql
   DROP TABLE Employees;
   ```

### DML
DML stands for Data Manipulation Language.
DML commands are responsible for inserting, updating, deleting, and querying data within database tables. 

1. **SELECT:**
   Retrieves data from one or more tables based on specified conditions.

   Example:
   ```sql
   SELECT Name, Salary FROM Employees WHERE id = 20;
   ```

2. **INSERT INTO:**
   Adds new records to a table.

   Example:
   ```sql
   INSERT INTO Employees (ID, Name, Salary) VALUES (101, 'abdo', 60000);
   ```

3. **UPDATE:**
   Modifies existing records in a table based on specified conditions.

   Example:
   ```sql
   UPDATE Employees SET Salary = 65000 WHERE Name = 'ahmed';
   ```

4. **DELETE FROM:**
   Removes records from a table based on specified conditions.

   Example:
   ```sql
   DELETE FROM Employees WHERE name = 'ahmed';
   ```

5. **INSERT INTO :**


   Example:
   ```sql
   INSERT INTO _table_name_ (_column1_, _column2_, _column3_, ...)  
VALUES (_value1_, _value2_, _value3_, ...);
   ```
