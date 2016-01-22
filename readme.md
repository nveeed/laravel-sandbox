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
        - Form and Html handler classes

- Create command: `nvd:crud table_name` to create controller, model and views for a specific table
    - Get fields information from db so that it can be used to generate `<form>` and validation rules
    - Generate route in `routes.php`
    - Generate crud controller
    - Generate model
        - Create validation information so that it can be used by `store` and `update` methods
    - Generate views
        - create
        - edit
        - index
        - show
    - Generate common views
        - actions
        - create-new-link
        - not-found-tr
        - pagination
        - search-btn

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
