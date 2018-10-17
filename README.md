# Foundation Base Theme

A super basic theme for WordPress using the awesome [Foundation 6](https://foundation.zurb.com) by Zurb.

The theme styles can be customized using SASS files located in the *components/* directory.

## Installation

Open a terminal and change directories into the top level of your WordPress install.

Clone the repository:

```
cd wp-content/themes
git clone https://github.com/asommer70/foundation-base-wordpress-theme.git
```

Install Foundation and other Node components:

```
cd foundation-base-wordpress-theme/components
npm install
```

Install the JavaScript vendor files:

```
npm run vendor
```

Build the stylesheet from scss files:

```
npm run sass
```

Enable the theme in the WordPress admin and enjoy.

## Development

While developing open a terminal and change to the *components* directory in the theme.  Execute:

```
npm start
```

This will watch for changes to the *components/scss* directory and rebuild the stylesheet automatically.

