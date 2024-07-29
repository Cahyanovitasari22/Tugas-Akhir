<!doctype html>
<!-- leaflet with banyak layer co_leaflet -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>SIMTARU | Peta</title>
        <link rel="stylesheet" href="{{asset('css/leaflet.css')}}"><link rel="stylesheet" href="{{asset('css/L.Control.Locate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/qgis2web.css')}}"><link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/leaflet-control-geocoder.Geocoder.css')}}">
        <link rel="stylesheet" href="{{asset('css/leaflet-measure.css')}}">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../user/landing/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="../user/landing/css/style.css" rel="stylesheet">
        
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
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
                <a href="/brosur" class="dropdown-item">Brosur</a>
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
        <div id="map">
        </div>
        <script src="{{asset('js/qgis2web_expressions.js')}}"></script>
        <script src="{{asset('js/leaflet.js')}}"></script><script src="{{asset('js/L.Control.Locate.min.js')}}"></script>
        <script src="{{asset('js/leaflet.rotatedMarker.js')}}"></script>
        <script src="{{asset('js/leaflet.pattern.js')}}"></script>
        <script src="{{asset('js/leaflet-hash.js')}}"></script>
        <script src="{{asset('js/Autolinker.min.js')}}"></script>
        <script src="{{asset('js/rbush.min.js')}}"></script>
        <script src="{{asset('js/labelgun.min.js')}}"></script>
        <script src="{{asset('js/labels.js')}}"></script>
        <script src="{{asset('js/leaflet-control-geocoder.Geocoder.js')}}"></script>
        <script src="{{asset('js/leaflet-measure.js')}}"></script>
        

    <!-- bagian data  -->
        <script src="{{asset('data/PolaRuang_Simtaru2023_2.js')}}"></script>
        <script src="{{asset('data/Jalan_Simtaru2023_3.js')}}"></script>
        <script src="{{asset('data/pusatkegiatan_4.js')}}"></script>
        <script src="{{asset('data/pusat_kegiatan_lokal.js')}}"></script>
        <script src="{{asset('data/pusat_kegiatan_wilayah.js')}}"></script>
        <script src="{{asset('data/pusat_pelayanan_kawasan.js')}}"></script>
        <script src="{{asset('data/pusat_pelayanan_lingkungan.js')}}"></script>
        <script src="{{asset('data/jaringan_transportasi_5.js')}}"></script>
        <script src="{{asset('data/bandar_kelas_III.js')}}"></script>
        <script src="{{asset('data/pelabuhan_laut_khusus.js')}}"></script>
        <script src="{{asset('data/pelabuhan_laut_provinsi.js')}}"></script>
        <script src="{{asset('data/pelabuhan_laut_nasional.js')}}"></script>
        <script src="{{asset('data/terminal_B.js')}}"></script>
    <!-- bagian data end  -->
     
     <script src="../user/landing/js/main.js"></script>
     <script>
   
         // menampilkan map 
        var hash = new L.Hash(map);

        var map = L.map('map', {
            zoomControl:false, maxZoom:25, minZoom:1
        });
        var zoomControl = L.control.zoom({
            position: 'topright' // Pindahkan kontrol zoom ke sebelah kanan atas
        }).addTo(map);

        // map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');



        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}})

      
       
         
        var bounds_group = new L.featureGroup([]);

        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        };


        // pane backgroud 
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
        layer_OpenStreetMap_0;
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



        layer_GoogleHybrid_1;
        map.addLayer(layer_GoogleHybrid_1);

        // end pane background 
        
        
        // pane mengambil data json 
        function pop_PolaRuang_Simtaru2023_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Status Kawasan : </th>\
                        <td>' + (feature.properties['Status_Kaw'] !== null ? autolinker.link(feature.properties['Status_Kaw'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }
        
        // pane style data json 

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
            }
                    break;
                case 'APL':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
                    break;
                case 'HPK':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,190,190,1.0)',
                interactive: true,
            }
                    break;
                case 'HPT':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,115,1.0)',
                interactive: true,
            }
                    break;
                case 'HP':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(163,255,115,1.0)',
                interactive: true,
            }
                    break;
                case 'HL':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,230,0,1.0)',
                interactive: true,
            }
                    break;
                case 'CA':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(223,115,255,1.0)',
                interactive: true,
            }
                    break;
                case 'TN':
                    return {
                pane: 'pane_PolaRuang_Simtaru2023_2',
                stroke: false, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(169,0,230,1.0)',
                interactive: true,
            }
                    break;
            }
        }

        map.createPane('pane_PolaRuang_Simtaru2023_2');
        map.getPane('pane_PolaRuang_Simtaru2023_2').style.zIndex = 402;
        // map.getPane('pane_PolaRuang_Simtaru2023_2').style['mix-blend-mode'] = 'normal';
        
        
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

          function pop_pusat_kegiatan_lokal(feature, layer) {
            var popupContent = '<table>\
                    \
                    <tr>\
                        <th>Pusat Kegiatan Lokal : </th><td colspan="2">' + (feature.properties['Ket'] !== null ? autolinker.link(feature.properties['Ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function pop_pusat_pelayanan_kawasan(feature, layer) {
            var popupContent = '<table>\
                    \
                    <tr>\
                        <th>Pusat Pelayanan Kawasan : </th><td colspan="2">' + (feature.properties['Ket'] !== null ? autolinker.link(feature.properties['Ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function pop_pusat_kegiatan_wilayah(feature, layer) {
            var popupContent = '<table>\
                    \
                    <tr>\
                        <th>Pusat Kegiatan Wilayah : </th><td colspan="2">' + (feature.properties['Ket'] !== null ? autolinker.link(feature.properties['Ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

         function pop_pusat_pelayanan_lingkungan(feature, layer) {
            var popupContent = '<table>\
                    \
                    <tr>\
                        <th>Pusat Pelayanan Lingkungan : </th><td colspan="2">' + (feature.properties['Ket'] !== null ? autolinker.link(feature.properties['Ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_pusatkegiatan_4_0(feature) {
            switch(String(feature.properties['Ket'])) {
                case 'PKW ( Pusat Kegiatan Wilayah)':
                    return {
                pane: 'pane_pusatkegiatan_4',
                shape: 'triangle',
                radius: 10.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,205,123,1.0)',
                interactive: true,
            }
                    break;
                case 'PKL ( Pusat Kegiatan Lokal )':
                    return {
                pane: 'pane_pusatkegiatan_4',
                radius: 6.8,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,30,42,1.0)',
                interactive: true,
            }
                    break;
                case 'PPK ( Pusat Pelayanan Kawasan*':
                    return {
                pane: 'pane_pusatkegiatan_4',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(17,167,209,1.0)',
                interactive: true,
            }
                    break;
                case 'PPL ( Pusat Pelayanan Lingkun*':
                    return {
                pane: 'pane_pusatkegiatan_4',
                radius: 3.2,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,127,0,1.0)',
                interactive: true,
            }
                    break;
            }
        }

        
        map.createPane('pane_pusatkegiatan_4');
        map.getPane('pane_pusatkegiatan_4').style.zIndex = 404;
        map.getPane('pane_pusatkegiatan_4').style['mix-blend-mode'] = 'normal';

        map.createPane('pane_pusat_kegiatan_lokal');
        map.getPane('pane_pusat_kegiatan_lokal').style.zIndex = 405;
        map.getPane('pane_pusat_kegiatan_lokal').style['mix-blend-mode'] = 'normal';

        map.createPane('pane_pusat_kegiatan_wilayah');
        map.getPane('pane_pusat_kegiatan_wilayah').style.zIndex = 406;
        map.getPane('pane_pusat_kegiatan_wilayah').style['mix-blend-mode'] = 'normal';

        map.createPane('pane_pusat_pelayanan_kawasan');
        map.getPane('pane_pusat_pelayanan_kawasan').style.zIndex = 407;
        map.getPane('pane_pusat_pelayanan_kawasan').style['mix-blend-mode'] = 'normal';

        map.createPane('pane_pusat_pelayanan_lingkungan');
        map.getPane('pane_pusat_pelayanan_lingkungan').style.zIndex = 408;
        map.getPane('pane_pusat_pelayanan_lingkungan').style['mix-blend-mode'] = 'normal';

        var layer_pusatkegiatan_4 = new L.geoJson(json_pusatkegiatan_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pusatkegiatan_4',
            layerName: 'layer_pusatkegiatan_4',
            pane: 'pane_pusatkegiatan_4',
            onEachFeature: pop_pusatkegiatan_4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_pusatkegiatan_4_0(feature));
            },
        });

        var layer_pusat_kegiatan_lokal = new L.geoJson(json_pusat_kegiatan_lokal, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pusat_kegiatan_lokal',
            layerName: 'layer_pusat_kegiatan_lokal',
            pane: 'pane_pusat_kegiatan_lokal',
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<b>' + feature.properties.ket + '</b>');
            },
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/pusatkegiatan_4_PKLPusatKegiatanLokal1.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });

         var layer_pusat_pelayanan_kawasan = new L.geoJson(json_pusat_pelayanan_kawasan, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pusat_pelayanan_kawasan',
            layerName: 'layer_pusat_pelayanan_kawasan',
            pane: 'pane_pusat_pelayanan_kawasan',
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<b>' + feature.properties.ket + '</b>');
            },
            pointToLayer: function (feature, latlng) {
                 return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/pusatkegiatan_4_PPKPusatPelayananKawasan2.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            },
        });


        var layer_pusat_kegiatan_wilayah = new L.geoJson(json_pusat_kegiatan_wilayah, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pusat_kegiatan_wilayah',
            layerName: 'layer_pusat_kegiatan_wilayah',
            pane: 'pane_pusat_kegiatan_wilayah',
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<b>' + feature.properties.ket + '</b>');
            },
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/pusatkegiatan_4_PKWPusatKegiatanWilayah0.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });

        var layer_pusat_pelayanan_lingkungan = new L.geoJson(json_pusat_pelayanan_lingkungan, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pusat_pelayanan_lingkungan',
            layerName: 'layer_pusat_pelayanan_lingkungan',
            pane: 'pane_pusat_pelayanan_lingkungan',
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<b>' + feature.properties.ket + '</b>');
            },
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/pusatkegiatan_4_PPLPusatPelayananLingkungan3.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });


        bounds_group.addLayer(layer_pusatkegiatan_4);
        function pop_jaringan_transportasi_5(feature, layer) {
            var popupContent = '<table>\
                   \
                    <tr>\
                        <th>Jaringan Transportasi : </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function pop_bandar_udara_kelas_III(feature, layer) {
            var popupContent = '<table>\
                                <tr>\
                                    <th>Bandara Kelas III: </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        
        function pop_pelabuhan_laut_khusus(feature, layer) {
            var popupContent = '<table>\
                                <tr>\
                                    <th>Pelabuhan Laut Khusus: </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function pop_pelabuhan_laut_provinsi(feature, layer) {
            var popupContent = '<table>\
                                <tr>\
                                    <th>Pelabuhan Laut Provinsi: </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }


        function pop_pelabuhan_laut_nasional(feature, layer) {
            var popupContent = '<table>\
                                <tr>\
                                    <th>Pelabuhan Laut Nasional: </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

             function pop_terminal_B(feature, layer) {
            var popupContent = '<table>\
                                <tr>\
                                    <th>Terminal B: </th><td colspan="2">' + (feature.properties['ket'] !== null ? autolinker.link(feature.properties['ket'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }


        function style_jaringan_transportasi_5_0(feature) {
            switch(String(feature.properties['ket'])) {
                case 'Bandara Udara Kelas III':
                    return {
                pane: 'pane_jaringan_transportasi_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: "{{asset('markers/amenity=airport.svg')}}",
            iconSize: [22.799999999999997, 22.799999999999997]
        }),
                interactive: true,
            }
                    break;
                case 'Pelabuhan Laut Khusus':
                    return {
                pane: 'pane_jaringan_transportasi_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: "{{asset('markers/anchor.svg')}}",
            iconSize: [19.0, 19.0]
        }),
                interactive: true,
            }
                    break;
                case 'Pelabuhan Laut Provinsi':
                    return {
                pane: 'pane_jaringan_transportasi_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: "{{asset('markers/anchor.svg')}}",
            iconSize: [19.0, 19.0]
        }),
                interactive: true,
            }
                    break;
                case 'Pelabuhan Laut National':
                    return {
                pane: 'pane_jaringan_transportasi_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: "{{asset('markers/anchor.svg')}}",
            iconSize: [26.599999999999998, 26.599999999999998]
        }),
                interactive: true,
            }
                    break;
                case 'Terminal B':
                    return {
                pane: 'pane_jaringan_transportasi_5',
        rotationAngle: -0.0174533,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: "{{asset('markers/transport_bus_station.svg')}}",
            iconSize: [18.24, 18.24]
        }),
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_jaringan_transportasi_5');
        map.getPane('pane_jaringan_transportasi_5').style.zIndex = 405;
        map.getPane('pane_jaringan_transportasi_5').style['mix-blend-mode'] = 'normal';
        var layer_jaringan_transportasi_5 = new L.geoJson(json_jaringan_transportasi_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_jaringan_transportasi_5',
            layerName: 'layer_jaringan_transportasi_5',
            pane: 'pane_jaringan_transportasi_5',
            onEachFeature: pop_jaringan_transportasi_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_jaringan_transportasi_5_0(feature));
            },
        });

         map.createPane('pane_bandar_udara_kelas_III');
        map.getPane('pane_bandar_udara_kelas_III').style.zIndex = 406;
        map.getPane('pane_bandar_udara_kelas_III').style['mix-blend-mode'] = 'normal';
        var layer_bandar_udara_kelas_III = new L.geoJson(json_bandar_udara_kelas_III, {
            attribution: '',
            interactive: true,
            dataVar: 'json_bandar_udara_kelas_III',
            layerName: 'layer_bandar_udara_kelas_III',
            pane: 'pane_bandar_udara_kelas_III',
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<b>' + feature.properties.ket + '</b>');
            },
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/jaringan_transportasi_5_BandarUdaraKelasIII0.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });

        map.createPane('pane_pelabuhan_laut_khusus');
        map.getPane('pane_pelabuhan_laut_khusus').style.zIndex = 407;
        map.getPane('pane_pelabuhan_laut_khusus').style['mix-blend-mode'] = 'normal';
        var layer_pelabuhan_laut_khusus = new L.geoJson(json_pelabuhan_laut_khusus, {
        attribution: '',
        interactive: true,
        dataVar: 'json_pelabuhan_laut_khusus',
        layerName: 'layer_pelabuhan_laut_khusus',
        pane: 'pane_pelabuhan_laut_khusus',
        onEachFeature: pop_pelabuhan_laut_khusus,
        pointToLayer: function (feature, latlng) {
            return L.marker(latlng, {
                icon: L.icon({
                    iconUrl: '{{asset("legend/jaringan_transportasi_5_PelabuhanLautKhusus1.png")}}', // Ganti dengan URL ikon yang benar
                    iconSize: [25, 25]
                })
            });
        }
        });


        map.createPane('pane_pelabuhan_laut_provinsi');
        map.getPane('pane_pelabuhan_laut_provinsi').style.zIndex = 408;
        map.getPane('pane_pelabuhan_laut_provinsi').style['mix-blend-mode'] = 'normal';

        var layer_pelabuhan_laut_provinsi = new L.geoJson(json_pelabuhan_laut_provinsi, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pelabuhan_laut_provinsi',
            layerName: 'layer_pelabuhan_laut_provinsi',
            pane: 'pane_pelabuhan_laut_provinsi',
            onEachFeature: pop_pelabuhan_laut_provinsi,
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/jaringan_transportasi_5_PelabuhanLautProvinsi2.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });

        map.createPane('pane_pelabuhan_laut_nasional');
        map.getPane('pane_pelabuhan_laut_nasional').style.zIndex = 409;
        map.getPane('pane_pelabuhan_laut_nasional').style['mix-blend-mode'] = 'normal';

        var layer_pelabuhan_laut_nasional = new L.geoJson(json_pelabuhan_laut_nasional, {
            attribution: '',
            interactive: true,
            dataVar: 'json_pelabuhan_laut_nasional',
            layerName: 'layer_pelabuhan_laut_nasional',
            pane: 'pane_pelabuhan_laut_nasional',
            onEachFeature: pop_pelabuhan_laut_nasional,
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/jaringan_transportasi_5_PelabuhanLautNational3.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });


          map.createPane('pane_terminal_B');
        map.getPane('pane_terminal_B').style.zIndex = 409;
        map.getPane('pane_terminal_B').style['mix-blend-mode'] = 'normal';

        var layer_terminal_B = new L.geoJson(json_terminal_B, {
            attribution: '',
            interactive: true,
            dataVar: 'json_terminal_B',
            layerName: 'layer_terminal_B',
            pane: 'pane_terminal_B',
            onEachFeature: pop_terminal_B,
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: '{{asset("legend/jaringan_transportasi_5_TerminalB4.png")}}', // Ganti dengan URL ikon yang benar
                        iconSize: [25, 25]
                    })
                });
            }
        });
       

        var baseMaps = {};

        
        L.control.layers(baseMaps,{
            
            
            '<tr><td style="text-align: center;"><img src="{{asset('legend/jaringan_transportasi_5_BandarUdaraKelasIII0.png')}}" /></td><td>Bandar Udara Kelas III</td></tr></table>': layer_bandar_udara_kelas_III,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/jaringan_transportasi_5_PelabuhanLautKhusus1.png')}}" /></td><td>Pelabuhan Laut Khusus</td></tr></table>': layer_pelabuhan_laut_khusus,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/jaringan_transportasi_5_PelabuhanLautProvinsi2.png')}}" /></td><td>Pelabuhan Laut Provinsi</td></tr></table>': layer_pelabuhan_laut_provinsi,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/jaringan_transportasi_5_PelabuhanLautNational3.png')}}" /></td><td>Pelabuhan Laut Nasional</td></tr></table>': layer_pelabuhan_laut_nasional,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/jaringan_transportasi_5_TerminalB4.png')}}" /></td><td>Terminal B</td></tr></table>': layer_terminal_B,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/pusatkegiatan_4_PKLPusatKegiatanLokal1.png')}}" /></td><td>PKL ( Pusat Kegiatan Lokal )</td></tr></table>': layer_pusat_kegiatan_lokal,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/pusatkegiatan_4_PKWPusatKegiatanWilayah0.png')}}" /></td><td>PKW ( Pusat Kegiatan Wilayah )</td></tr></table>': layer_pusat_kegiatan_wilayah,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/pusatkegiatan_4_PPKPusatPelayananKawasan2.png')}}" /></td><td>PPK ( Pusat Pelayanan Kawasan )</td></tr></table>': layer_pusat_pelayanan_kawasan,
            '<tr><td style="text-align: center;"><img src="{{asset('legend/pusatkegiatan_4_PPLPusatPelayananLingkungan3.png')}}" /></td><td>PPL ( Pusat Pelayanan Lingkungan )</td></tr></table>': layer_pusat_pelayanan_lingkungan,
            'Jaringan Jalan<br /><table><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanArteri0.png')}}" /></td><td>Jalan Arteri</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanKolektor1.png')}}" /></td><td>Jalan Kolektor</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanLokal2.png')}}" /></td><td>Jalan Lokal</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/Jalan_Simtaru2023_3_JalanLingkungan3.png')}}" /></td><td>Jalan Lingkungan</td></tr></table>': layer_Jalan_Simtaru2023_3,
        
            'Pola Ruang <br /><table><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_Air0.png')}}" /></td><td>Air</td></tr><tr><td style="text-align: center` ;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_ArealPenggunaanLain1.png')}}" /></td><td>Areal Penggunaan Lain</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiyangdapatdikonversi2.png')}}" /></td><td>Kawasan Hutan Produksi yang dapat dikonversi</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiTerbatas3.png')}}" /></td><td>Kawasan Hutan Produksi Terbatas</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanProduksiTetap4.png')}}" /></td><td>Kawasan Hutan Produksi Tetap</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanHutanLindung5.png')}}" /></td><td>Kawasan Hutan Lindung</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanCagarAlam6.png')}}" /></td><td>Kawasan Cagar Alam</td></tr><tr><td style="text-align: center;"><img src="{{asset('legend/PolaRuang_Simtaru2023_2_KawasanTamanNasional7.png')}}" /></td><td>Kawasan Taman Nasional</td></tr><tr><td>Base Map</td></tr></table>': layer_PolaRuang_Simtaru2023_2,
            
            
            " Google Hybrid": layer_GoogleHybrid_1,
        
            "OpenStreetMap": layer_OpenStreetMap_0 , 
            
        },  {collapsed:false}).addTo(map);
        setBounds();
        </script>
    </body>
</html>
