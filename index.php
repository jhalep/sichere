<!DOCTYPE html>
<html>

<head>
    <title>Hist&oacute;rico Web Personas Itau</title>

    <script type="text/javascript" src="tableau-2.min.js"></script>
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
                url = "https://10az.online.tableau.com/t/movizzon/views/Informtica/Hoja1?iframeSizedToWindow=true&:embed=y&:showAppBanner=false&:display_count=no&:showVizHome=no&:origin=viz_share_link",
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
<div id="vizContainer" align="center"></div>
</body>

</html>
