```mermaid
classDiagram
    class UserController {
        - PDO conn
        + __construct()
        + login() void
        + updatePasswordsToHash(password, mail) void
        + successLogin(mail, admin) void
        + logout() void
        + register() void
        + showDataUser() void
        + update() void
        + delete() void
    }
````
```mermaid
sequenceDiagram
    participant V as View (CreateAccount.php)
    participant C as UserController
    participant M as Model (PDO / Database)
    participant S as Session

    V->>C: POST register(name, surname, email, password)
    
    C->>C: Validate name/surname (letters only)
    C->>C: Validate password format
    C->>M: SELECT Email FROM Usuario WHERE Email=:mail
    M-->>C: email exists? (true/false)

    alt email already exists OR validation errors
        C->>S: Set failMessage
        C->>V: Redirect back to CreateAccount.php
    else valid new user
        C->>C: hash password
        C->>M: INSERT INTO Usuario(...)
        M-->>C: insert success or fail

        alt insertion successful
            C->>S: set loggin=true, admin=0, user=email, icon=path
            C->>V: Redirect to Home.php
        else insertion failed
            C->>S: Set failMessage
            C->>V: Redirect back to CreateAccount.php
        end
    end    
    V->>V: On load → show popup message via JS if session message exists
````

