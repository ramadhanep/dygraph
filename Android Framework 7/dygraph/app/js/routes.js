var routes = [
  // Index page
  {
    path: '/',
    url: './index.html',
    name: 'splash',
  },
  {
    path: '/about-app/',
    url: './halaman/about-app.html',
    name: 'about-app',
  },
  {
    path: '/category/',
    url: './halaman/category.html',
    name: 'category',
  },
  {
    path: '/fotografer/',
    url: './halaman/fotografer.html',
    name: 'fotografer',
  },
  {
    path: '/akun/',
    url: './halaman/akun.html',
    name: 'akun',
  },

  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './halaman/offline.html',
  },
];
