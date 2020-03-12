# LifeAsWeLiveIt.com WordPress Theme

[![Netlify Status](https://api.netlify.com/api/v1/badges/036cb21b-dbea-485b-a688-172820af3276/deploy-status)](https://app.netlify.com/sites/lawli-com-staging/deploys)

WordPress Theme for [LifeAsWeLiveIt.com](http://LifeAsWeLiveIt.com).

Visit the [staging site](https://lawli-com-staging.netlify.com/)

Run locally for development:

```
npm install
npm start
```

## Overview

This repo allows for local (static) development that also compiles assets to a distinct theme folder that can be uploaded to WordPress.

- All development should occur in `src`
- Styles are created using Sass in the `_scss` folder. These are compiled into `style.css` that is compiled to `src` during development and to the theme folder on `build`.
- JS is developed in `js` and can use ES6 format. These are compiled into `app.js` into `src` during development and to the theme folder on `build`.
- All WP-specific theme files such as `functions.php`, etc. should be maintained in the `_theme` folder. These do not have any impact on the static build of the site but are compiled into the root theme folder on `build`.
- Image assets are syncronized to the theme folder on `build`.

The core commands are as follows:

- `npm start` builds the development files and starts watch scripts along with live reload for browser development.
- `npm stage` builds the development files for deploying to the Netlify staging environment.
- `nnp build` builds the theme files into a distinct theme folder for upload to WP.
