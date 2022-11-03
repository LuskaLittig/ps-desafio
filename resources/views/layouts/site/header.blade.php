<header id = "site-header">
  <div id="header-container">
    <div id="header-logo">
      <img src="{{asset("site/img/desenho-xicara-de-cafe-e-graos-de-cafe_247824-2.webp")}}" alts="Logo do Cofree" onclick="openPage('http://127.0.0.1:8000/siteIndex')">
    
    </div> 
    
    
    <div id ="header-links">
        <a href="Sobrenos">Sobre-Nos</a>
        <a href="footer">Footer</a>
        <a href="{{ route('dashboard') }}">Admin</a>
    </div>

    <div id="header-darkmode">
      <input type="checkbox" id="dark-mode-toggle" onchange="darkMode(event)">
      <label for="dark-mode-toggle" class="label-darkmode">
        <span id = "light-symbol"class="material-symbols-outlined" style="display: block">light_mode </span>
        <span id="dark-symbol" class="material-symbols-outlined" style="display: none">dark_mode </span>
      </label>
    </div>
  </div>


</header>