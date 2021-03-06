var SLIDE_CONFIG = {
  // Slide settings
  settings: {
    title: 'Cowboy, Meet Ninja',
    subtitle: 'How to never crash a site again',
    eventInfo: {
     title: 'WordCamp Phoenix',
     date: '2014'
    },
    useBuilds: true, // Default: true. False will turn off slide animation builds.
    usePrettify: false, // Default: true
    enableSlideAreas: true, // Default: true. False turns off the click areas on either slide of the slides.
    enableTouch: true, // Default: true. If touch support should enabled. Note: the device must support touch.
    //analytics: 'UA-XXXXXXXX-1', // TODO: Using this breaks GA for some reason (probably requirejs). Update your tracking code in template.html instead.
    favIcon: 'lib/img/favicon.ico',
    fonts: [
      'Open Sans:regular,semibold,italic,italicsemibold',
      'Source Code Pro'
    ],
    //theme: ['mytheme'], // Add your own custom themes or styles in /theme/css. Leave off the .css extension.
  },

  // Author information
  presenters: [{
    name: 'Paul Clark',
    company: 'Director of Business Development at <a href="http://10up.com">10up.com</a>',
    // gplus: 'http://plus.google.com/1234567890',
    twitter: '@pdclark',
    www: 'http://pdclark.com',
    github: 'http://github.com/pdclark'
  }]
};

