<style type="text/css">
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&family=Poppins:wght@300;400;500;600;700&display=swap");

* {
  font-family: "Poppins", "sans-sarif";
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --body-color: #e4e9f7;
  --sidebar-color: #fff;
  --primary-color: #f4f2f2;
  --primary-color-light: #f4f2f2;
  --toggle-color: #ddd;
  --text-color: #707070;
  --dark-color: #000;

  --trans-02: all 0.2s ease;
  --trans-03: all 0.3s ease;
  --trans-04: all 0.4s ease;
  --trans-04: all 0.5s ease;
}

body {
  height: 100vh;
  background-color: var(--body-color);
  transition: var(--trans-02);
}

body.dark {
  --body-color: #181914;
  --sidebar-color: #242526;
  --primary-color: #34383c;
  --primary-color-light: #383a3c;
  --toggle-color: #fff;
  --text-color: #ccc;
  --dark-color: #fff;
}
/* Reusable CSS */

.sidebar .text {
  font-size: 16px;
  font-weight: 500;
  color: var(--text-color);
  /* transition: var(--trans-04); */
  white-space: unset;
  opacity: 1;
}

.sidebar .image {
  min-width: 60px;
  display: flex;
  align-items: center;
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  left: 0px;
  height: 100%;
  width: 195px;
  background-color: var(--sidebar-color);
  padding: 10px 14px;
  transition: var(--trans-02);
}

.sidebar header {
  position: relative;
}
.sidebar .image-text img {
  width: 40px;
  height: 40px;
  border-radius: 10px;
}

.sidebar header .image-text {
  display: flex;
  align-items: center;
}

.header .image-text .header-text {
  display: flex;
  flex-direction: column;
}

.header-text .main {
  font-weight: 600;
}

.header-text .sub {
  margin-top: -2px;
}

.sidebar header .toggle {
  position: absolute;
  top: 50%;
  right: -25px;
  transform: translateY(-50%) rotate(180deg);
  height: 25px;
  width: 25px;
  background-color: var(--dark-color);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: var(--sidebar-color);
  font-size: 22px;
}

.sidebar li {
  height: 50px;
  /* background-color: red; */
  margin-top: 10px;
  list-style: none;
  display: flex;
  align-items: center;
}

.sidebar li .icons {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 60px;
  font-size: 20px;
}
.sidebar li .icons,
.sidebar li .text {
  color: var(--text-color);
  transition: var(--trans-03);
}

.sidebar .search-bar input {
  width: 100%;
  height: 100%;
  outline: none;
  border: none;
  border-radius: 6px;
  background-color: var(--primary-color-light);
}
.sidebar .search-bar {
  background-color: var(--primary-color-light);
}

.sidebar li a {
  height: 100%;
  width: 100%;
  text-decoration: none;
  display: flex;
  align-items: center;
  padding-right: 50px;
  border-radius: 6px;
  transition: var(--trans-04);
  text-align: left;
}

.sidebar li a:hover {
  background: var(--primary-color);
}
.sidebar li a:hover .icons,
.sidebar li a:hover .text {
  color: var(--dark-color);
}

.sidebar .menu-bar {
  height: 100%;
  height: calc(100% - 50px);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.menu-bar .mode {
  position: relative;
  border-radius: 6px;
  background: var(--primary-color-light);
}

.menu-bar .mode .moon-sun {
  height: 50px;
  width: 60px;
  display: flex;
  align-items: center;
}
.menu-bar .mode i {
  position: absolute;
  transition: var(--trans-03);
}

.menu-bar .mode i.sun {
  opacity: 0;
}
body.dark .menu-bar .mode i.sun {
  opacity: 1;
}
body.dark .menu-bar .mode i.moon {
  opacity: 0;
}
.menu-bar .mode .toggle-switch {
  position: absolute;
  /* left: 0; */
  right: -10px;
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
  min-width: 60px;
  background: var(--primary-color-light);

  /* background: red; */
  cursor: pointer;
}

.toggle-switch .switch {
  position: relative;
  height: 22px;
  width: 44px;
  background-color: var(--toggle-color);
  border-radius: 25px;
}

.switch::before {
  content: "";
  position: absolute;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  background-color: var(--sidebar-color);
}

body.dark .switch::before {
  left: 25px;
}

body.dark .sidebar .image img {
  background-color: #fff;
  /* border-color: 2px solid #000; */
}

.sidebar.close {
  width: 78px;
}

.sidebar.close .text {
  opacity: 0;
}

.sidebar.close .search-bar {
  background-color: var(--sidebar-color);
}

body.dark .search-bar input {
  color: white;
}

.sidebar.close .toggle {
  transform: translateY(-50%);
}
</style>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />  
<nav class="sidebar">
      <header>
        
        <i class="bx bx-chevron-right toggle"></i>
      </header>
  <p>Welcome, <?php echo $this->session->userdata('name'); ?></p>   

      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            
            <li class="nav-link">
              <a href="<?php echo base_url('index.php/Home/dashboard');?>">
                <i class="bx bx-home-alt icons"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="<?php echo base_url('Blog/add');?>">
                <i class="bx bx-bar-chart-alt-2 icons"></i>
                <span class="text nav-text">Add Blog</span>
              </a>
            </li>
             <li class="nav-link">
              <a href="<?php echo base_url('Blog/viewblog');?>">
                <i class="bx bx-bar-chart-alt-2 icons"></i>
                <span class="text nav-text">View Blog</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="<?php echo base_url('Home/blog_view');?>">
                <i class="bx bx-bar-chart-alt-2 icons"></i>
                <span class="text nav-text">Home</span>
              </a>
            </li>
           
            
          </ul>
        </div>

        <div class="bottom-content">
          <li class="nav-link">
            <a href="<?php echo base_url('Usercontroller/userlogout');?>">
              <i class="bx bx-log-out icons"></i>
              <span class="text nav-text">Log Out</span>
            </a>
          </li>
          <li class="mode">
            
           
          </li>
        </div>
      </div>
    </nav>