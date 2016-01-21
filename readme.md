# Milestones

- Create a test crud so that the pattern can be decided
    - Update `routes.php`
    - Create a test crud controller 
    - Create a test model
    - Create test views
        - List markup
        - Create markup + functionality
        - Edit markup + functionality
        - Delete markup + functionality

- **Features**:
    - Search
    - Sorting
    - pagination
    
- Refactor code to create reusable html components
    - create a directory for common views
        - pagination
        - actions column etc

- Create command: `nvd:crud table_name` to create controller, model and views for a specific table
    - Get fields information from db so that it can be passed to the `<form>` view
    - Create validation information so that it can be used by `store` and `update` methods

- Automate things for `table_name` provided
    - Update `routes.php`
    - Create crud controller
    - Create model
    - Create views

- Create command: `nvd:crud all` to generate crud for all tables

- Package all files into a composer package

- Create Documentation

- **Feature**: Detect foreign keys
    - change input type
    - change validation rules
    - display labels in list

- **Feature**: Add Policies
    - Create policy for update, store, delete
    - Register policy
    
- **Feature**:
    - Filter options

- **Feature**:
    - Ajax loading
