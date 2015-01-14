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
    <core-drawer-panel id='drawerPanel'>
        <div drawer>
            <!--
            <core-toolbar>Menu</core-toolbar>
            <core-menu>
                <core-item label='One'></core-item>
                <core-item label='Two'></core-item>
                <core-item label='Three'></core-item>
                <core-item label='Four'></core-item>
            </core-menu>
            -->
        </div>

        <div main>
            <button core-drawer-toggle>Toggle</button>
            <!--
            <core-toolbar>
                <paper-icon-button id='navicon' icon='menu' core-drawer-toggle></paper-icon-button>
                <div>Jyoti Development Trust</div>
                <span flex></span>
                <paper-icon-button icon='search'></paper-icon-button>
            </core-toolbar>
            <div class='content'></div>
            -->
        </div>
    </core-drawer-panel>
    <script src="app.js">
    </script>
</body>

</html>
