## Database Table
### User Table
<!-- - Name : users -->

### Task Table
- Name : tasks
- Column:
    - id
    - title
    - description
    - status
    - priority
    - due_date
- Foreign Key
    - category_id : table categories
    - assigned_to : table users 

### Categories Table
- Name : categories
- Column:
    - id
    - name
    - color
    - timestamps

