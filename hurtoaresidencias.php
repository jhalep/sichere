<!DOCTYPE html>
<html>

<head>
    <title>Hurto a Residencias</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="tableau-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">


        function refreshThatSucker(){
            alert("entro");
            viz.refreshDataAsync();
            alert("salio");
            //or do something more obvious and evil
            //viz.showShareDialog();
        }

        function initViz() {
            var containerDiv = document.getElementById("vizContainer"),
                url = "https://public.tableau.com/views/ProyectoFinalInformtica/DashboardHurtosResidencias?:embed=y&:display_count=yes&:origin=viz_share_link",
                options = {
                    hideTabs: false,
                    onFirstInteractive: function () {
                        viz.refreshDataAsync();
                        console.log("Run this code when the viz has finished loading.");
                    }
                };

            var viz = new tableau.Viz(containerDiv, url, options);
            // Create a viz object and embed it in the container div.

        }

    </script>
</head>

<body onload="initViz();">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Sichere</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/hurtoapersonas.php">Hurto a Personas <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/hurtoaresidencias.php">Hurto a Residencias</a>
                <a class="nav-item nav-link" href="/homicidios.php">Homicidios</a>
            </div>
        </div>
    </div>
</nav>
<div id="vizContainer" width="90%" align="center"></div>
</body>

</html>
