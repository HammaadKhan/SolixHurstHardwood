<style>
    li span {
        color: white;
    }

    li a span {
        color: white !important;
    }

    li a i {
        color: white !important;
    }

    li:hover a {
        background: rgb(255, 255, 255) !important;
    }

    li:hover img,
    li:hover span {
        color: #2b4156 !important;
    }

    li:hover img {

        background: #2b4156 !important;

    }

    .dropbtn {
        background-color: #2b4156;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
        text-decoration: none;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
        text-decoration: none;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: white;
        color: #2b4156;
    }

    .dropdown:hover img {

        background: #2b4156 !important;

    }

    .dropdown-content a {
        padding-left: 60px;
        font-size: 18px;
    }
 
    #select2-selectedUser-container, #select2-para_no-container {
        background: #d0d0d0;
    }
</style>
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <!-- <img src="{!! asset('images/PITB.png') !!}"> -->
        </div>
        <div class="sidebar-brand-text mx-3" style="text-wrap: nowrap;">Audit Staff Dashboard</div>
    </a>

     <div class="dropdown">
        <button class="dropbtn dropdown-toggle">
             <img src="{{ asset('images/3,4 ICONS-05.png') }}" width="25%" height="55%" style="margin-left:-30px;">
            <b> Observations</b></button>
        <div class="dropdown-content" style="width:100%;">
            <a href="/observation"><b>Add New</b></a>
            <a href="/observations"><b>Details</b></a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn dropdown-toggle">
            <img src="{{ asset('images/CMS assets -07.png') }}" width="25%" height="40%" 
                style="margin-left:-40px;">
            <b> Select Type</b></button>
        <div class="dropdown-content" style="width:100%;">
            <a href="/pdp"><b>PDP</b></a>
            <a href="/pac"><b>PAC</b></a>
        </div>
    </div>
    
    <div class="dropdown">
        <button class="dropbtn dropdown-toggle">
            <img src="{{ asset('images/taskicon.png') }}" width="25%" height="40%" style="margin-left:-80px;">
            <b> Tasks</b></button>
        <div class="dropdown-content" style="width:100%;">
            <a href="/assigntasks"><b>New Task</b></a>
            <a href="/tasks"><b>Assigned Tasks</b></a>
        </div>
    </div>

</ul>
