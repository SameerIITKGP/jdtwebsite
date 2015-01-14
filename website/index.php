<html>

<head>

    <title>Polymer Workshop</title>


    <meta name="viewport"
    content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="app.css">

    <script src="../components/webcomponentsjs/webcomponents.js">
    </script>

    <link rel="import"
      href="../components/font-roboto/roboto.html">

    <link rel="import"
      href="../components/core-header-panel/core-header-panel.html">

    <link rel="import"
      href="../components/core-drawer-panel/core-drawer-panel.html">

    <link rel="import"
      href="../components/core-icon-button/core-icon-button.html">

    <link rel="import"
      href="../components/core-toolbar/core-toolbar.html">

    <link rel="import"
      href="../components/paper-icon-button/paper-icon-button.html">

    <link rel="import"
      href="../components/core-icons/core-icons.html">

    <link rel="import"
      href="../components/core-menu/core-menu.html">

    <link rel="import"
      href="../components/core-item/core-item.html">    

</head>

<body fullbleed layout vertical unresolved>
    <core-drawer-panel id='drawerPanel' responsiveWidth="10000px">
        <core-header-panel drawer>
            <core-toolbar>
                <core-item icon='arrow-back' label='MENU'></core-item>
            </core-toolbar>
            <core-menu>
                <core-item icon='home' label='HOME'></core-item>
                <core-item icon='account-circle' label='MISSION'></core-item>
                <core-item icon='account-circle' label='APPROACH'></core-item>
                <core-item icon='account-circle' label='HISTORY'></core-item>
                <core-item icon='account-circle' label='MODEL'></core-item>
                <core-item icon='account-circle' label='DISHA IN ACTION'></core-item>
                <core-item icon='account-circle' label='COMMUNITY PARTICIPATION'></core-item>
                <core-item icon='account-circle' label='VOLUNTEERS'></core-item>
                <core-item icon='account-circle' label="DISHA'S ACHIEVEMENTS"></core-item>
                <core-item icon='account-circle' label='TRUSTEES'></core-item>
                <core-item icon='account-circle' label='DONATIONS'></core-item>
            </core-menu>
        </core-header-panel>

        <core-header-panel main>
            <core-toolbar>
                <paper-icon-button id='navicon' icon='menu'></paper-icon-button>
                <div>Jyoti Development Trust</div>
                <span flex></span>
                <paper-icon-button icon='search'></paper-icon-button>
            </core-toolbar>
            
            <div class='content'></div>
            <div class='footer'>Sameer</div>
        </core-header-panel>
    </core-drawer-panel>
    <script src="app.js">
    </script>
</body>

</html>
