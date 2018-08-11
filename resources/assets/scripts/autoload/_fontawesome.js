// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// import home and search icons
import { faHome, faSearch } from '@fortawesome/free-solid-svg-icons';

// import the Facebook and Twitter icons
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faSearch, faHome, faFacebook, faTwitter);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
