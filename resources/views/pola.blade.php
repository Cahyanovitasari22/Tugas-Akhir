<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>SIMTARU | Peta</title>
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('css/L.Control.Locate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/qgis2web.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/leaflet-control-geocoder.Geocoder.css')}}">
    <link rel="stylesheet" href="{{asset('css/leaflet-measure.css')}}">
    <link href="../user/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="../user/landing/css/style.css" rel="stylesheet">
    <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container-fluid bg-white">
    <div class="container">
        <nav class="navbar navbar-white navbar-expand-lg py-lg-0">
            <a href="#" class="text-dark fw-bold">
                <img src="{{asset('static/images/SIMTARU.png')}}" width="150" alt="Logo"> 
            </a>
            <div class="navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/peta" class="nav-item nav-link">Peta RTRW</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">KKPR</a>
                        <div class="dropdown-menu m-0 bg-white">
                            <a href="price.html" class="dropdown-item">Brosur</a>
                            <a href="{{asset('pdf/Bukusaku.pdf')}}" class="dropdown-item" target="_blank">Buku Saku</a>
                        </div>
                    </div>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                    <a href="{{ url('dashboard') }}" class="btn btn-info nav-item nav-link">admin</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div id="map"></div>
<script src="{{asset('js/qgis2web_expressions.js')}}"></script>
<script src="{{asset('js/leaflet.js')}}"></script>
<script src="{{asset('js/L.Control.Locate.min.js')}}"></script>
<script src="{{asset('js/leaflet.rotatedMarker.js')}}"></script>
<script src="{{asset('js/leaflet.pattern.js')}}"></script>
<script src="{{asset('js/leaflet-hash.js')}}"></script>
<script src="{{asset('js/Autolinker.min.js')}}"></script>
<script src="{{asset('js/rbush.min.js')}}"></script>
<script src="{{asset('js/labelgun.min.js')}}"></script>
<script src="{{asset('js/labels.js')}}"></script>
<script src="{{asset('js/leaflet-control-geocoder.Geocoder.js')}}"></script>
<script src="{{asset('js/leaflet-measure.js')}}"></script>
<script src="{{asset('data/PolaRuang_Simtaru2023_2.js')}}"></script>
<script src="{{asset('data/Jalan_Simtaru2023_3.js')}}"></script>
<script>
    var map = L.map('map', {
        zoomControl: false, maxZoom: 25, minZoom: 1
    });

    var hash = new L.Hash(map);

    var zoomControl = L.control.zoom({
        position: 'topright'
    }).addTo(map);

    var bounds_group = new L.featureGroup([]);

    function setBounds() {
        if (bounds_group.getLayers().length) {
            map.fitBounds(bounds_group.getBounds());
        }
    };

    map.createPane('pane_OpenStreetMap_0');
    map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
    var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        pane: 'pane_OpenStreetMap_0',
        opacity: 1.0,
        attribution: '',
        minZoom: 1,
        maxZoom: 25,
        minNativeZoom: 0,
        maxNativeZoom: 19
    });
    map.addLayer(layer_OpenStreetMap_0);

    map.createPane('pane_GoogleHybrid_1');
    map.getPane('pane_GoogleHybrid_1').style.zIndex = 401;
    var layer_GoogleHybrid_1 = L.tileLayer('https://mt0.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        pane: 'pane_GoogleHybrid_1',
        opacity: 1.0,
        attribution: '',
        minZoom: 1,
        maxZoom: 25,
        minNativeZoom: 0,
        maxNativeZoom: 18
    });
    map.addLayer(layer_GoogleHybrid_1);

    function pop_PolaRuang_Simtaru2023_2(feature, layer) {
        var popupContent = '<table>\
            <tr>\
                <th scope="row">Status Kawasan : </th>\
                <td>' + (feature.properties['Status_Kaw'] !== null ? autolinker.link(feature.properties['Status_Kaw'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_PolaRuang_Simtaru2023_2_0(feature) {
        switch(String(feature.properties['Status_Kaw'])) {
            case 'Air':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    opacity: 1,
                    color: 'rgba(0,255,255,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(151,255,255,1.0)',
                    interactive: true,
                };
            case 'APL':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,255,255,1.0)',
                    interactive: true,
                };
            case 'HPK':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,190,190,1.0)',
                    interactive: true,
                };
            case 'HPT':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,255,115,1.0)',
                    interactive: true,
                };
            case 'HP':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(163,255,115,1.0)',
                    interactive: true,
                };
            case 'HL':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(76,230,0,1.0)',
                    interactive: true,
                };
            case 'CA':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(223,115,255,1.0)',
                    interactive: true,
                };
            case 'TN':
                return {
                    pane: 'pane_PolaRuang_Simtaru2023_2',
                    stroke: false,
                    fill: true,
                    fillOpacity: 0.5,
                    fillColor: 'rgba(169,0,230,1.0)',
                    interactive: true,
                };
        }
    }

    map.createPane('pane_PolaRuang_Simtaru2023_2');
    map.getPane('pane_PolaRuang_Simtaru2023_2').style.zIndex = 402;

    var layer_PolaRuang_Simtaru2023_2 = new L.geoJson(json_PolaRuang_Simtaru2023_2, {
        attribution: '',
        interactive: true,
        dataVar: 'json_PolaRuang_Simtaru2023_2',
        layerName: 'layer_PolaRuang_Simtaru2023_2',
        pane: 'pane_PolaRuang_Simtaru2023_2',
        onEachFeature: pop_PolaRuang_Simtaru2023_2,
        style: style_PolaRuang_Simtaru2023_2_0,
    });
    bounds_group.addLayer(layer_PolaRuang_Simtaru2023_2);
    map.addLayer(layer_PolaRuang_Simtaru2023_2);

    

        function pop_Jalan_Simtaru2023_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                       <td>Fungsi Jalan   </td> <td colspan="2"> : ' + (feature.properties['FUNGSI'] !== null ? autolinker.link(feature.properties['FUNGSI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td>Ruas Jalan </td> <td colspan="2"> : ' + (feature.properties['NAMEOBJ'] !== null ? autolinker.link(feature.properties['NAMEOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

         function style_Jalan_Simtaru2023_3_0(feature) {
            switch(String(feature.properties['FUNGSI'])) {
                case 'Jalan Arteri':
                    return {
                pane: 'pane_Jalan_Simtaru2023_3',
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Jalan Kolektor':
                    return {
                pane: 'pane_Jalan_Simtaru2023_3',
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_Jalan_Simtaru2023_3',
                opacity: 1,
                color: 'rgba(255,127,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Jalan Lingkungan':
                    return {
                pane: 'pane_Jalan_Simtaru2023_3',
                opacity: 1,
                color: 'rgba(255,200,200,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
            }
        }

        map.createPane('pane_Jalan_Simtaru2023_3');
        map.getPane('pane_Jalan_Simtaru2023_3').style.zIndex = 403;
        map.getPane('pane_Jalan_Simtaru2023_3').style['mix-blend-mode'] = 'normal';
        
        var layer_Jalan_Simtaru2023_3 = new L.geoJson(json_Jalan_Simtaru2023_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jalan_Simtaru2023_3',
            layerName: 'layer_Jalan_Simtaru2023_3',
            pane: 'pane_Jalan_Simtaru2023_3',
            onEachFeature: pop_Jalan_Simtaru2023_3,
            style: style_Jalan_Simtaru2023_3_0,
        });

            bounds_group.addLayer(layer_Jalan_Simtaru2023_3);
        map.addLayer(layer_Jalan_Simtaru2023_3);
        function pop_pusatkegiatan_4(feature, layer) {
            var popupContent = '<table>\
                    \
                    <tr>\
                        <th>Pusat Kegiatan : </th><td colspan="2">' + (feature.properties['Ket'] !== null ? autolinker.link(feature.properties['Ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }



    var baseMaps = {};

    L.control.layers(baseMaps, {
        'Pola Ruang <br /><table><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_Air0.png')}}" /></td><td>Air</td></tr><tr><td style="text-align: center` ;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_ArealPenggunaanLain1.png')}}" /></td><td>Areal Penggunaan Lain</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiyangdapatdikonversi2.png')}}" /></td><td>Kawasan Hutan Produksi yang dapat dikonversi</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiTerbatas3.png')}}" /></td><td>Kawasan Hutan Produksi Terbatas</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiTetap4.png')}}" /></td><td>Kawasan Hutan Produksi Tetap</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanLindung5.png')}}" /></td><td>Kawasan Hutan Lindung</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanCagarAlam6.png')}}" /></td><td>Kawasan Cagar Alam</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanTamanNasional7.png')}}" /></td><td>Kawasan Taman Nasional</td></tr><tr><td>Base Map</td></tr></table>': layer_PolaRuang_Simtaru2023_2,
        'Jaringan Jalan<br /><table><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanArteri0.png')}}" /></td><td>Jalan Arteri</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanKolektor1.png')}}" /></td><td>Jalan Kolektor</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanLokal2.png')}}" /></td><td>Jalan Lokal</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanLingkungan3.png')}}" /></td><td>Jalan Lingkungan</td></tr></table>': layer_Jalan_Simtaru2023_3,
        'Google Hybrid': layer_GoogleHybrid_1,
        'OpenStreetMap': layer_OpenStreetMap_0,
    }, {collapsed: false}).addTo(map);

    setBounds();
</script>
</body>
</html>

