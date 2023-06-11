import './bootstrap';

import OlMap from 'ol/Map.js';
import OSM from 'ol/source/OSM.js';
import TileLayer from 'ol/layer/Tile.js';
import View from 'ol/View.js';
import * as Proj from 'ol/proj';
import * as Layer from 'ol/layer';
import * as Source from 'ol/source';
import Feature from 'ol/Feature.js';
import Overlay from 'ol/Overlay.js';
import * as Geom from 'ol/geom';
import Style from 'ol/style/Style';
import Icon from 'ol/style/Icon';
import * as Interaction from 'ol/interaction';

window.OlMap = OlMap;
window.OSM = OSM;
window.TileLayer = TileLayer;
window.View = View;
window.Proj = Proj;
window.Layer = Layer;
window.Source = Source;
window.Feature = Feature;
window.Overlay = Overlay;
window.Geom = Geom;
window.Style = Style;
window.Icon = Icon;
window.Interaction = Interaction;

import Swal from 'sweetalert2'
window.Swal = Swal;

import Lightbox from 'bs5-lightbox';
window.Lightbox = Lightbox;
