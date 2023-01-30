# Don't mock what you don't own

Our code is coupled with the external library from AKEI. Everytime they make a change we need to make modifications in all the places we use it.

In the new version, AKEI decided to rename some functions we depended on. Upgrading would have needed to make changes in 4 places.

In the tests, we could see the coupling because we created a double for a class from that external library. To avoid that problem we often say that we shouldn't create doubles for code we don't own.

This advice is often summarized as

> 💡 Don't mock what you don't own!

[Next ➡️](./looking-at-the-vocabulary.md)