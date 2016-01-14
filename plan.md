# Milestones

- Create a parent crud controller so that the other controllers can inherit from it
- Create default views
    - index view for list, edit and delete
    - `<form>` view for creating a record
- Make a child controller
    - inherit the crud actions
    - Get fields information from db so that it can be passed to the `<form>` view
    - Get validation information from the db so that it can be used by `store` and `update` methods
- List markup
- Create markup + functionality
- Edit markup + functionality
- Delete markup + functionality
- Create command: `nvd:crud table_name` to create controller, model and views for a specific table
- Create command: `nvd:crud all` to create controller, model and views for all tables
- Package all files into a composer package