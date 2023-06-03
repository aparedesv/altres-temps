import './bootstrap';

/* import { Map as OLMap, View as OLView } from 'ol';
import { Tile as OLTileLayer } from 'ol/layer';
import { OSM as OLOsm } from 'ol/source';

window.OLMap = OLMap;
window.OLView = OLView;
window.OLTileLayer = OLTileLayer;
window.OLOsm = OLOsm;
window.OLProj = OLProj; */

import Map from 'ol/Map.js';
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

window.Map = Map;
window.OSM = OSM;
window.TileLayer = TileLayer;
window.View = View;
window.Feature = Feature;
window.Layer = Layer;
window.Source = Source;
window.Proj = Proj;
window.Geom = Geom;
window.Style = Style;
window.Icon = Icon;
window.Overlay = Overlay;


