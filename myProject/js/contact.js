
var map = new BMap.Map("top-map");          // 创建地图实例
var point = new BMap.Point(113.912901,30.924392);  // 创建点坐标
map.centerAndZoom(point, 17);                 // 初始化地图，设置中心点坐标和地图级别
/***添加控件*/
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl());
map.addControl(new BMap.MapTypeControl());
/*****添加覆盖物****/
var mk=new BMap.Marker(point);
mk.setAnimation(BMAP_ANIMATION_BOUNCE);
map.addOverlay(mk);
