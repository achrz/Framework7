
import HomePage from '../pages/home.f7';
import Matematika from '../pages/matematika.f7';
import Diskon from '../pages/diskon.f7';

var routes = [
  {
    path: '/',
    component: HomePage,
  },
  {
    path: '/matematika/',
    component: Matematika,
  },
  {
    path: '/diskon/',
    component: Diskon,
  },
];

export default routes;