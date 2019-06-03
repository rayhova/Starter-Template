<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/usaHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
<div id="mapdiv" style="width: 1000px; height: 450px;"></div>

<script type="text/javascript">
var map = AmCharts.makeChart("mapdiv",{
type: "map",
theme: "light",
panEventsEnabled : true,
backgroundColor : "#fff",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : false
},
dataProvider : {
map : "usaHigh",
getAreasFromMap : true,
areas :
[]
},
areasSettings : {
autoZoom : true,
color : "#B4B4B7",
colorSolid : "#003367",
selectedColor : "#003367",
outlineColor : "#666666",
rollOverColor : "#009cde",
rollOverOutlineColor : "#000000"
}
});
</script>
