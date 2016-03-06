# WooCommerce Print Suite

[![Join the chat at https://gitter.im/kilbot/WooCommerce-Print-Suite](https://badges.gitter.im/kilbot/WooCommerce-Print-Suite.svg)](https://gitter.im/kilbot/WooCommerce-Print-Suite?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/kilbot/WooCommerce-Print-Suite.svg)](https://travis-ci.org/kilbot/WooCommerce-Print-Suite) 
[![Join the chat at https://gitter.im/kilbot/WooCommerce-Print-Suite](https://badges.gitter.im/kilbot/WooCommerce-Print-Suite.svg)](https://gitter.im/kilbot/WooCommerce-Print-Suite?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Developing locally

WooCommerce Print Suite is a WordPress plugin which requires [WordPress](http://wordpress.org) and [WooCommerce](wordpress.org/plugins/woocommerce).

To develop the plugin locally you will first have to set up a local server with WordPress and WooCommerce installed. It is recommended that you first follow the installation steps at [Varying Vagrant Vagrants (VVV)](https://github.com/Varying-Vagrant-Vagrants/VVV#the-first-vagrant-up), this will give you a local virtual server environment with everything you need to develop WordPress plugins. You do not *have* to use VVV, but if you are capable of managing your own local server you probably don't need these instructions.

Once you have successfully installed VVV, step through the following commands to install WooCommerce:
```bash
# start the virtual machine
$ vagrant up

# access the server
$ vagrant ssh

# move to the stable WordPress directory
$ cd /srv/www/wordpress-default/

# install and activate WooCommerce
$ wp plugin install woocommerce --activate

# install and activate WordPress importer
$ wp plugin install wordpress-importer --activate

# import dummy data into WooCommerce
$ wp import wp-content/plugins/woocommerce/dummy-data/dummy-data.xml --authors=create
```

You now should have a WordPress install available at `http://local.wordpress.dev` with a dummy WooCommerce store at `http://local.wordpress.dev/shop`. Now it's time to clone the WooCommerce Software License Manager project and start developing!

```bash
# make sure you're in the plugins folder
$ cd wp-content/plugins/

# clone the project
$ git clone https://github.com/kilbot/WooCommerce-Print-Suite.git woocommerce-print-suite

# move into the project folder and install any dependencies
$ cd woocommerce-print-suite
$ npm install
$ composer install

# run development tasks (use --force if you are fixing a test)
$ grunt dev
```