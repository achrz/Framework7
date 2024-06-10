
import HomePage from '../pages/home.f7';
import Profile from '../pages/profile.f7';
import Kontak from '../pages/kontak.f7';

var routes = [
  {
    path: '/',
    component: HomePage,
  },
  {
    path: '/profile/',
    component: Profile,
  },
  {
    path: '/kontak/',
    component: Kontak,
  },
];

export default routes;