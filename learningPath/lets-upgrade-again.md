# Let's upgrade again

We've made some changes to our system.

We follow the "Don't mock what you don't own advice" since we've introduced an adapter of the Kulinarisk and used a double of that adapter in tests.
We have an integration test for that adapter that checks that it works properly with a Kulinarisk.

Now it's time to see our good work pay! Let's upgrade our Kulinarisk !

> ⚙️ Run `composer require akei/kulinarisk:2.0`

That's great, we've got our new Kulinarisk.

[Next ➡️](./adapt-the-adapter.md)
