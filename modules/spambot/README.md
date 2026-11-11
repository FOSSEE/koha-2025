# Spambot

Spambot protects the user registration form from spammers and spambots by
verifying registration attempts against the Stop Forum Spam
`(www.stopforumspam.com)` online database.Test
It also adds some useful features to help deal with spam accounts.

This module works well for sites which require user registration
before posting is allowed (which is most forums).

For a full description of the module, visit the
[project page](https://www.drupal.org/project/spambot).

Submit bug reports and feature suggestions, or track changes in the
[issue queue](https://www.drupal.org/project/issues/spambot).


## Contents of this file

- Requirements
- Recommended modules
- Installation
- Configuration
- Maintainers


## Requirements

This module requires no modules outside of Drupal core.


## Recommended modules

- [User Stats](https://www.drupal.org/project/user_stats):
  Allow to use a bit more statistics of users by IP address.

- Statistics (built-in core):
  Allow to use a bit more statistics of users by IP address.


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see
[Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configurations

- Configure user permissions in `Administration » People » Permissions`:
    - Protected from spambot scans
      Users in roles with the "Protected from spambot scans" permission would 
      not be scanned by cron.

- Go to the `/admin/config/system/spambot` page and check additional settings.


# Maintainers

- bengtan - [bengtan](https://www.drupal.org/u/bengtan)
- Michael Moritz - [miiimooo](https://www.drupal.org/u/miiimooo)
- Dmitry Kiselev - [kala4ek](https://www.drupal.org/u/kala4ek)
