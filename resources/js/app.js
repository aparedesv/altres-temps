import './bootstrap';

import { Map as OLMap, View as OLView } from 'ol';
import { Tile as OLTileLayer } from 'ol/layer';
import { OSM as OLOsm } from 'ol/source';
import * as OLProj from 'ol/proj';
// import OLMap from 'ol/Map';
// import OLView from 'ol/View';
// import OLTileLayer from 'ol/layer/Tile';
// import OLOsm from 'ol/source/OSM';

window.OLMap = OLMap;
window.OLView = OLView;
window.OLTileLayer = OLTileLayer;
window.OLOsm = OLOsm;
window.OLProj = OLProj;


