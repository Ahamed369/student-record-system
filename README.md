<!-- =========================================================
     STUDENT RECORD SYSTEM
     Author: M.R.Ahamed
     GitHub: Ahamed369
========================================================= -->

<div align="center">

# 🎓 STUDENT RECORD SYSTEM

### Modern • Responsive • Lightweight • PHP-Powered

<img src="https://readme-typing-svg.demolab.com?font=Fira+Code&weight=700&size=26&duration=2500&pause=700&color=00C2FF&center=true&vCenter=true&repeat=true&width=900&lines=Student+Record+System;Built+with+HTML+%2B+CSS+%2B+PHP+%2B+JSON;Search+%E2%80%A2+Add+%E2%80%A2+Manage+Student+Records;Developed+by+M.R.Ahamed" alt="Typing SVG" />

<br/>

<img src="https://capsule-render.vercel.app/api?type=waving&height=220&color=gradient&text=STUDENT%20RECORD%20SYSTEM&fontSize=38&fontAlignY=38&desc=Simple%20%7C%20Fast%20%7C%20Responsive%20%7C%20Reliable&descAlignY=58&animation=twinkling" width="100%" alt="Student Record System Banner"/>

<br/>

[![GitHub](https://img.shields.io/badge/GitHub-Ahamed369-181717?style=for-the-badge&logo=github)](https://github.com/Ahamed369)
[![Repository](https://img.shields.io/badge/Repository-Student_Record_System-00C2FF?style=for-the-badge&logo=github)](https://github.com/Ahamed369/student-record-system)
![HTML](https://img.shields.io/badge/HTML5-Frontend-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JSON](https://img.shields.io/badge/JSON-Data-000000?style=for-the-badge&logo=json&logoColor=white)

<br/>

**A lightweight web application for adding, searching, retrieving, and managing student information through a clean browser-based interface.**

</div>

---

## 🌌 Project Overview

The **Student Record System** is a web-based application designed to simplify student information management.

The system provides a straightforward interface for working with student records while combining a lightweight frontend with PHP-based server-side processing and JSON-based data storage.

The project demonstrates practical integration between:

- **HTML5** for application structure
- **CSS3** for visual styling and responsive presentation
- **PHP** for server-side processing
- **JSON** for lightweight record storage
- **JavaScript** within the frontend for interactive browser functionality

The application is intentionally lightweight and does not require a full relational database server for its current implementation.

---

<div align="center">

## ⚡ Technology Stack

<img src="https://skillicons.dev/icons?i=html,css,php,js,vscode,git,github&theme=dark" alt="Technology Stack"/>

<br/><br/>

| Technology | Role |
|:---:|:---|
| 🟠 **HTML5** | Page structure and user interface |
| 🔵 **CSS3** | Styling, layout and responsive presentation |
| 🟣 **PHP** | Backend request processing |
| 🟡 **JavaScript** | Client-side interaction |
| ⚫ **JSON** | Lightweight student record storage |
| 🟠 **Git** | Source-code version control |
| ⚪ **GitHub** | Repository hosting and project management |

</div>

---

## 🚀 Core Features

<table>
<tr>
<td width="50%" valign="top">

### 🔎 Student Search

Search for student information using a student ID through the main application interface.

</td>
<td width="50%" valign="top">

### ➕ Add Student Records

Add new student information through the application and process the submitted data through PHP.

</td>
</tr>

<tr>
<td width="50%" valign="top">

### 🆔 Student ID Validation

The backend checks existing records to help prevent duplicate student IDs.

</td>
<td width="50%" valign="top">

### 📦 JSON Data Storage

Student information is maintained using a lightweight JSON-based storage approach.

</td>
</tr>

<tr>
<td width="50%" valign="top">

### 📱 Responsive Interface

The application uses a browser-friendly layout designed to remain usable across different screen sizes.

</td>
<td width="50%" valign="top">

### ⚡ Lightweight Architecture

No heavy framework or database server is required for the current implementation.

</td>
</tr>
</table>

---

## 🧩 Application Architecture

```text
                    ┌─────────────────────────────┐
                    │          USER               │
                    │       Web Browser           │
                    └──────────────┬──────────────┘
                                   │
                                   ▼
                    ┌─────────────────────────────┐
                    │        index.html           │
                    │                             │
                    │  User Interface             │
                    │  Search Interface           │
                    │  Add Student Interface      │
                    │  Client-Side Interaction    │
                    └──────────────┬──────────────┘
                                   │
                    ┌──────────────┴──────────────┐
                    │                             │
                    ▼                             ▼
       ┌────────────────────────┐    ┌────────────────────────┐
       │    add_student.php     │    │    get_student.php     │
       │                        │    │                        │
       │  Add Records           │    │  Retrieve Records      │
       │  Validate Student ID   │    │  Search by Student ID  │
       └────────────┬───────────┘    └────────────┬───────────┘
                    │                             │
                    └──────────────┬──────────────┘
                                   │
                                   ▼
                    ┌─────────────────────────────┐
                    │       students.json         │
                    │                             │
                    │    Student Data Storage     │
                    └─────────────────────────────┘
```

---

## 📂 Project Structure

```text
student-record-system/
│
├── 📄 index.html
│   └── Main application interface
│
├── 🎨 styles.css
│   └── Application styling and layout
│
├── ⚙️ add_student.php
│   └── Processes and stores new student records
│
├── 🔍 get_student.php
│   └── Retrieves student information
│
├── 🗃️ students.json
│   └── Stores student records
│
└── 📘 README.md
    └── Project documentation
```

---

## 🔄 Application Workflow

```mermaid
flowchart TD
    A([Start Application]) --> B[Open Student Record System]
    B --> C{Select Action}

    C -->|Search| D[Enter Student ID]
    D --> E[Send Request]
    E --> F[get_student.php]
    F --> G[(students.json)]
    G --> H{Student Found?}
    H -->|Yes| I[Display Student Record]
    H -->|No| J[Display Not Found Message]

    C -->|Add Student| K[Enter Student Information]
    K --> L[Submit Student Record]
    L --> M[add_student.php]
    M --> N{Student ID Exists?}
    N -->|Yes| O[Reject Duplicate ID]
    N -->|No| P[Save Student Record]
    P --> G
```

---

## 🧠 How the System Works

### 01 — Frontend

`index.html` provides the primary application interface. Users can interact with the student search functionality and the form used for adding records.

### 02 — Styling

`styles.css` controls the application's visual appearance, including layout, spacing, typography and responsive presentation.

### 03 — Add Student Processing

`add_student.php` receives student information from the frontend and handles the logic required to store new records.

Before adding a record, the system checks whether the supplied student ID already exists.

### 04 — Student Retrieval

`get_student.php` handles requests for retrieving student information using a supplied student ID.

### 05 — Data Storage

`students.json` acts as the project's lightweight data store.

This approach keeps the application simple and makes it suitable for demonstrations, coursework, prototypes and smaller applications.

---

<div align="center">

## 🎯 Project Highlights

![Lightweight](https://img.shields.io/badge/Architecture-Lightweight-00C2FF?style=for-the-badge)
![Responsive](https://img.shields.io/badge/UI-Responsive-8A2BE2?style=for-the-badge)
![PHP](https://img.shields.io/badge/Backend-PHP-777BB4?style=for-the-badge)
![JSON](https://img.shields.io/badge/Storage-JSON-FFB000?style=for-the-badge)
![Git](https://img.shields.io/badge/Version_Control-Git-F05032?style=for-the-badge)

</div>

---

## 🛠️ Installation & Local Setup

Because the project contains PHP files, opening `index.html` directly is not sufficient for all application functionality. Run the project through a PHP-capable local server.

### Option 1 — PHP Built-In Server

Clone the repository:

```bash
git clone https://github.com/Ahamed369/student-record-system.git
```

Enter the project directory:

```bash
cd student-record-system
```

Start the PHP development server:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000
```

### Option 2 — XAMPP

1. Install **XAMPP**.
2. Copy the project folder into the `htdocs` directory.
3. Start **Apache** from the XAMPP Control Panel.
4. Open your browser.
5. Navigate to:

```text
http://localhost/student-record-system/
```

---

## 💻 Development Setup

Recommended development environment:

```text
Editor       : Visual Studio Code
Versioning   : Git
Repository   : GitHub
Frontend     : HTML5 + CSS3 + JavaScript
Backend      : PHP
Storage      : JSON
```

---

## 🔐 Validation & Data Handling

The project includes backend logic for working with student IDs and stored student records.

One important validation mechanism is duplicate student-ID detection. Before a new record is accepted, existing records can be checked to determine whether the supplied student ID is already present.

For a production deployment, additional controls should be introduced, including stronger input validation, authentication, authorization, concurrency-safe storage, server configuration hardening and a production-grade database.

---

## 📈 Future Development

The current lightweight architecture can be extended with:

- MySQL database integration
- Administrator authentication
- Role-based access control
- Student record editing
- Student record deletion
- Advanced search and filtering
- Pagination
- Student profile photographs
- Dashboard statistics
- Data export
- Reporting
- Audit logging
- REST API architecture
- Improved server-side validation
- Deployment configuration

---

## 🗺️ Development Roadmap

```mermaid
timeline
    title Student Record System Development Roadmap

    Current Version
        : HTML interface
        : CSS styling
        : PHP backend
        : JSON storage
        : Student search
        : Add student records

    Next Stage
        : Edit functionality
        : Delete functionality
        : Improved validation
        : Dashboard

    Advanced Stage
        : MySQL database
        : Authentication
        : Role-based access
        : Reporting

    Future
        : REST API
        : Cloud deployment
        : Extended analytics
```

---

## 🧪 Example Usage

### Search for a Student

```text
1. Open the application
2. Locate Student ID search
3. Enter the required Student ID
4. Submit the search
5. Review the returned student information
```

### Add a Student

```text
1. Open the Add Student section
2. Enter the required information
3. Provide a unique Student ID
4. Submit the form
5. PHP validates the request
6. The record is stored in students.json
```

---

<div align="center">

# 🐍 Contribution Snake

<img src="https://raw.githubusercontent.com/Ahamed369/Ahamed369/output/github-contribution-grid-snake-dark.svg" alt="GitHub Contribution Snake"/>

</div>

> **Note:** The contribution snake requires the `Ahamed369` profile repository to generate the snake SVG through GitHub Actions. If that SVG has not been generated in the profile repository yet, GitHub cannot display it. The Student Record System itself does not depend on this graphic.

---

<div align="center">

## 📊 GitHub Activity

<img height="170" src="https://github-readme-stats.vercel.app/api?username=Ahamed369&show_icons=true&theme=tokyonight&hide_border=true&rank_icon=github" alt="M.R.Ahamed GitHub Statistics"/>

<img height="170" src="https://github-readme-stats.vercel.app/api/top-langs/?username=Ahamed369&layout=compact&theme=tokyonight&hide_border=true" alt="M.R.Ahamed Top Languages"/>

</div>

---

<div align="center">

## 🧑‍💻 Developer

<img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=700&size=24&duration=2200&pause=800&color=A855F7&center=true&vCenter=true&repeat=true&width=700&lines=M.R.Ahamed;Computer+Science+Undergraduate;Full-Stack+Developer;Building+Digital+Solutions" alt="Developer Typing Banner"/>

### M.R.Ahamed

**Computer Science Undergraduate • Full-Stack Developer**

[![GitHub](https://img.shields.io/badge/GitHub-Ahamed369-181717?style=for-the-badge&logo=github)](https://github.com/Ahamed369)
[![Repository](https://img.shields.io/badge/Project-Student_Record_System-00C2FF?style=for-the-badge&logo=github)](https://github.com/Ahamed369/student-record-system)

</div>

---

## 🤝 Contributions

Contributions, suggestions and improvements are welcome.

A standard contribution workflow is:

```bash
git clone https://github.com/Ahamed369/student-record-system.git
cd student-record-system
git checkout -b feature/your-feature
```

After making changes:

```bash
git add .
git commit -m "Add new feature"
git push origin feature/your-feature
```

Then open a pull request through GitHub.

---

## ⭐ Support the Project

If you find the project useful, you can support it by:

- ⭐ Starring the repository
- 🍴 Forking the project
- 🐛 Reporting issues
- 💡 Suggesting improvements
- 🔀 Contributing through pull requests

---

## 📌 Repository

<div align="center">

[![Open Repository](https://img.shields.io/badge/OPEN_STUDENT_RECORD_SYSTEM-00C2FF?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Ahamed369/student-record-system)

</div>

---

## 📜 Project Information

```text
Project Name    : Student Record System
Repository      : student-record-system
Developer       : M.R.Ahamed
GitHub          : Ahamed369
Frontend        : HTML5 / CSS3 / JavaScript
Backend         : PHP
Data Storage    : JSON
Version Control : Git
Repository Host : GitHub
```

---

<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&height=160&color=gradient&section=footer&animation=twinkling" width="100%" alt="Footer"/>

### 💻 Designed & Developed by M.R.Ahamed

**Student Record System**

<img src="https://readme-typing-svg.demolab.com?font=Fira+Code&weight=600&size=18&duration=2500&pause=900&color=00E5FF&center=true&vCenter=true&repeat=true&width=650&lines=Code+%E2%80%A2+Learn+%E2%80%A2+Build+%E2%80%A2+Improve;Turning+Ideas+Into+Digital+Solutions;Thanks+for+visiting+the+repository!" alt="Footer Typing SVG"/>

<br/>

![Visitors](https://komarev.com/ghpvc/?username=Ahamed369&label=PROFILE+VIEWS&style=for-the-badge)

<br/>

**© 2026 M.R.Ahamed**

</div>
