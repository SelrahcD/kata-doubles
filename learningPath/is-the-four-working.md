# Is the four working?

To keep the tests really fast you've probably used a test double for the Four.

This means that we don't have a test that show that our Four is actually working. That would be super nice to have some tests that would detect the issue we had when we upgraded the Kulinarisk to the next version.

> ⚙️ Introduce a test showing that the Four works correctly.

>❓What do we need to do to ensure that the Four is working properly ?
> 
> Remember, it's a wrapper from an outside library. We want to know if something goes wrong if the library is modified.

<details>
  <summary>Tips</summary>
    We need to make an integration test with the library.
</details>

[Next ➡️](./create-integration-test.md)