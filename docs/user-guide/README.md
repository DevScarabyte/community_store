# Introduction
 
Community Store is a free and open-source online shop/cart add-on for the PHP based content management system [Concrete CMS](https://www.concretecms.org/).

The add-on includes common online shop components such as a shopping cart, product lists, a checkout mechanism and ways to track orders. It is not a stand-alone system - it integrates tightly with Concrete CMS, with blocks and pages used to present products.

There is a 'core' Community Store package, which can then be expanded with further add-ons. Therefor the [concretecms-community-store organisation](https://github.com/concretecms-community-store) contains multiple projects.


## Key Features

- Highly configurable blocks for products, product lists, product filters and for cart links
- A single page checkout
- Full multilingual support, allowing the full translation of product details, cart and checkout pages
- Fine-grained product pricing through product options
- Multiple discount options, including one-time codes, automatic discounts
- Multiple available payment methods, such as Stripe, Paypal and Authorize.Net
- Multiple shipping methods available
- Digital Downloads and Member Account creation
- Stock level tracking
- Product grouping, categorization and relating products
- Support for custom product attributes
- Events support, allowing developers to develop solutions to complex processing needs


## Goals

Community Store aims to be a highly configurable eCommerce solution for Concrete CMS. 

Whilst it has sensible defaults and styling using Concrete CMS's default theme Elemental, it aims to be as free as possible of its own styling - allowing it to be styled and customized freely to match a custom theme.

Another goal is to provide shop components that can take full advantage of Concrete CMS's strengths. For example, products or lists of products as blocks which allows for advanced permissioning, layouts and easy template overriding. There is also support for member creation and adding users to groups on the purchase of products, which then combined with Concrete CMS's broader permissioning powerfully handles the control of pay-online content. 

On a technical level, Community Store aims to follow Concrete CMS's 'best practices' and coding conventions. 

 
## Documentation Scope

The aim of this documentation is not to cover every feature of Community Store in depth. Instead, it aims to cover concepts that are not immediately obvious, or developer concepts such as overriding templates and developing new shipping and payment methods.
 
## Support

If you discover bugs or issues, or need support with customizations and using Community Store, you can:

- Detail the issue on [GitHub's Issue Tracker](https://github.com/concretecms-community-store/community_store/issues). Whilst GitHub is mor intended more for bug tracking, polite questions on usage or how to approach customizations are welcome.
- Post on the [Concrete CMS's forum](https://forums.concretecms.org/c/ecommerce/10) your question or request for assistance. You may also consider posting in the Jobs section for commercial help.
- Email the lead developer of the project, Ryan Hewitt of [Mesuva Web Development](https://www.mesuva.com), via [ryan@mesuva.com.au](ryan@mesuva.com.au)
