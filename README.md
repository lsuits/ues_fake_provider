# Fake UES Enrollment Provider

The Fake UES Enrollment Provider is used primarily for testing and example
purposes. It is not meant to be used for real enrollments.

The provider plugin registers itself as a Moodle local plugin which handles
two important UES events:

1. `ues_list_provider`
2. `ues_load_fake_provider`

For more information about UES and the enrollment process, please go to the
[UES wiki][ues].

[ues]: https://github.com/lsuits/ues/wiki

## Installation

Fake enrollment information installs as a Moodle [local plugin][local] to be
used with UES. Once installed, UES must be configured to use it.

[local]: http://docs.moodle.org/dev/Local_plugins

## License

Fake enrollment adopts the same license that Moodle itself does.
