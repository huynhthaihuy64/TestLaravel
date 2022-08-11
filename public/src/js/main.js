const showMenu = (toggleId, sidebarId) => {
    const toggle = document.getElementById(toggleId),
    sidebar = document.getElementById(sidebarId);

    if(toggle && sidebar){
        toggle.addEventListener('click',()=>{
            sidebar.classList.toggle('show');
            toggle.classList.toggle('rotate');
        })
    }
}
showMenu('sidebar-toggle', 'sidebar');
