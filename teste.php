
 
    <style>

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  height: 100vh;
  background-color: #e4e3e8;
  padding: 0.375rem;
  font-family: Poppins, sans-serif;
  position: relative;
}

button,
a {
  all: unset;
  font: inherit;
  cursor: pointer;
}

nav {
  position: fixed;
  width: 5rem;
  height: calc(100vh - 0.75rem);
  background-color: #ffffff;
  padding: 1rem 0.75rem;
  border-radius: 0.75rem;
  display: flex;
  flex-direction: column;
  transition: width 500ms ease;
}
body.active nav {
  width: 15rem;
}

.sidebar-header,
.sidebar-links {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.sidebar-header {
  margin-bottom: 1.5rem;
}

.logo-wrapper {
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 1.25rem;
}
.logo-wrapper > img {
  width: 3.25rem;
  height: 3.25rem;
  background-color: #f7e7f9;
  padding: 0.4rem;
  border-radius: 0.5rem;
}

.sidebar-links {
  flex-direction: column;
  margin-bottom: auto;
  gap: 0.6rem;
  padding-top: 1.5rem;
}
nav > .sidebar-links {
  border-top: 1px solid rgb(211, 211, 211);
}

body.active .sidebar-links,
body.active .sidebar-header,
body.active .user-profile {
  justify-content: start;
  align-items: stretch;
}

.link {
  display: flex;
  padding: 0.6rem;
  border-radius: 0.5rem;
  gap: 1.5rem;
}
.hidden {
  display: none;
}
body.active .hidden {
  display: inline;
}

.link:hover,
.link.active:hover {
  background-color: #C86DD7;
  color: #f4f4f6;
}


.link > img {
  width: 24px;
  height: 24px;
}

.sidebar-bottom .sidebar-links {
  padding-bottom: 1.5rem;
}

.toggle-btn {
  position: absolute;
  top: 10px;
  right: -50px;
  padding: 0.5rem;
  background-color: #fff;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 0.25s ease;
}
body.active .toggle-btn {
  transform: rotate(180deg);
}

nav {
    background:linear-gradient(170deg, #C86DD7 0%, #3023AE 100%);
}

div a{
    color: black;
}
div a:hover{
    text-decoration: none;
}

nav a {
    padding: 10px;
    text-align: center;
}


    </style>
 <nav>
        <div class="sidebar-header">
            <a href="index.php" class="logo-wrapper">
            <img src="assets/escola.svg" alt="">
            <h2 class="hidden">Escola</h2>
        </a>

        <button class="toggle-btn">
            <img src="assets/expandir.svg" alt="">
        </button>
           
        </div>
        <div class="sidebar-links">
            <a href="index.php" class="link active">
                <img src="assets/home.svg" alt="home">
                <span class="hidden">HOME</span>
            </a>

            <!-- se precisar de mais links só copiar -->

            <a href="visualizar.php" class="link">
                <img src="assets/aluno.png" alt="visualizar">
                <span class="hidden">Ver alunos</span>
            </a>

            <a href="inserir.php" class="link ">
                <img src="assets/inserir.svg" alt="inserir">
                <span class="hidden">inserir</span>
            </a>

        </div>

       
    </nav>

    <script>
        const sidebarBtn = document.querySelector(".toggle-btn");
const sidebar = document.querySelector("aside");

sidebarBtn.addEventListener("click", () => {
    document.body.classList.toggle("active");
});
    </script>
  
