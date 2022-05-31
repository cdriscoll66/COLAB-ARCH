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

## Branches

The `default` branch of this repository is where PRs are merged, and has [CI](https://github.com/pantheon-systems/WordPress/tree/default/.circleci) that copies `default` to `master` after removing the CI directories. This allows customers to clone from `master` and implement their own CI without needing to worry about potential merge conflicts.

## Custom Upstreams

If you are using this repository as a starting point for a custom upstream, be sure to review the [documentation](https://pantheon.io/docs/create-custom-upstream#pull-in-core-from-pantheons-upstream) and pull the core files from the `master` branch.
