# Create an abstraction

Instead of directly depending on the AKEI library let's create an abstraction. We will encapsulate the Kulinarisk inside a class we own.
Then, we will use that abstraction in the code. That way when we will upgrade to V2 we'll only have to make the changes in the wrapper and not in each and every place that currently use the Kulinarisk.

>❓What would be a good name for that abstraction?

<details>
  <summary>Answer</summary>
Based on the documentation provided by our test names a good name for the abstraction could be "Four".
</details>

[Next ➡️](./introduce-the-wrapper.md)