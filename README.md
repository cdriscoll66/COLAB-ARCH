# Standard COLAB README

## Project Description
**What the project is about and why we did it**

This is the www.architect.io Website. Rebuilt using Lumberjack - twentytwentyone block styles - and a few pieces of material design.

## Project Team
**The people who worked on it for reference/bugging later**

- Project Manager: Claire Cunningham
- UX Strategist: -
- UX/UI Designer: -
- Software Engineer: -
- Web Developer: Conor Driscoll
- QA Analyst: TC Carroll

## Cache Clearing
**How do you clear the site's cache?**

 1. Hosting: Clear cache from the admin dashboard via X
 2. Cloudflare: Clear cache via the plugin in the admin or login through the Cloudflare dashboard

## Hosting

- [Pantheon Dashboard](https://dashboard.pantheon.io/sites/c4681dd7-2f1a-4341-8e38-6edc3748b704)

### Environments

| Name    | Custom Domain / URL                 | Platform Domain / URL                           |
|:--------|:------------------------------------|:------------------------------------------------|
| LIVE    | https://www.architect.io/           | https://live-architectio.pantheonsite.io/    |
| TEST    | https://test-colab-website.com/     | https://test-architectio.pantheonsite.io/    |
| DEV     | https://dev-colab-website.com/      | https://dev-architectio.pantheonsite.io/    |
| UPDATES |                                     | https://updates-architectio.pantheonsite.io/ |
| RELEASE |                                     | https://release-architectio.pantheonsite.io/ |
| DEVELOP |                                     | https://develop-architectio.pantheonsite.io/ |
| LOCAL   |                                     | https://architectio.lndo.site/               |

## Running this site
**Basic info on how to get the site running locally**

This site uses Lando for containerization and Laravel Mix/Gulp/Grunt for builds. This Drupal/WordPress/etc. site was built using Lumberjack/Sage/etc.

### Getting Started
 1. Run `lando start`
 2. Run `lando pull --code=none --database=live --files=none`

### Compiling Styles and Scripts

A production build should always be run before styles and scripts are committed to a repo.

These commands should be configured to run an `npm install` before it tries to compile. Check the `.lando.yml` for project specific configuration.

- Run `lando prod`, production build of assets
- Run `lando watch`, developnent build of assets, watch for file changes and continuously compile<br>

## Functionality
**Descriptions of project specific functionality with appropriate links to templates/documents/files/etc.**

### Business Critical
**What will stop business if this feature is not working**

 -
 - Links to offsite client login (https://www.architect.io/wp-login)

 - (https://www.architect.io/): Homepage and information
 - (https://www.architect.io/docs): Documentation
 - (https://www.architect.io/contact-us): Lead Tool


### Other Functionality
**What were the custom things that are likely to break on modification/updates**

- [MaterialDesignPieces]: The Original site was built in Gatsby using material Design. Many of the MATD libraries are imported to mimic the behavior. 
- [Documentation](https://www.architect.io/docs/): Documentation System
- [Customblocks](https://www.architect.io/): This site will be built using Custom blocks built in react. 


### Key Layouts
**What are the key layouts**

 - [Home Page](https://www.architect.io/)
 - [Default Page](https://www.architect.io/pricing/)
 - [Post Archive](https://www.architect.io/blog/)
 - [Post Single](https://www.architect.io/blog/2021-09-02/feature-spotlight-ide-component-validation/)

### 3rd Party Dependencies
 - ACF Pro
 - Admin Columns Pro
 - ShortPixel
 - Material Design

#### Service Dependencies
 - RECAPTCHA

#### Required Licenses
 - ACF Pro
 - Admin Columns Pro
 - Add This
 - ShortPixel

## Key Documentation
- https://docs.lumberjack.rareloop.com/
- https://wordpress.org/

### COLAB Project Related Documentation
**Links to key COLAB project specific documentation**

- [Strategic Road Map](https://www.example.com/)
- [Backlog Epic](https://www.example.com/)
- [Functional Spec](https://www.example.com/)
- [Running Meeting Notes](https://www.example.com/)

### Technologies Documentation
**Links to key technologies documentation like hosting, special services, etc.**

- [Platform README](https://pantheon.io/docs/)
- [Lumberjack](https://docs.lumberjack.rareloop.com/)
- [Jira](https://teamcolab.atlassian.net/jira/software/c/projects/ARCH01/boards/248)
