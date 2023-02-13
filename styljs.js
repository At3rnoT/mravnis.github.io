const pythonButton = document.getElementById("python-button");
const javascriptButton = document.getElementById("javascript-button");
const rubyButton = document.getElementById("ruby-button");
const lessonContainer = document.getElementById("lesson-container");

const showLesson = (title, description, code, output) => {
  lessonContainer.innerHTML = `
    <h2>${title}</h2>
    <p>${description}</p>
    <pre id="code-example">
${code}
    </pre>
    <button id="run-button">Run Code</button>
    <pre id="output"></pre>
  `;

  const runButton = document.getElementById("run-button");
  const outputElement = document.getElementById("output");

  runButton.addEventListener("click", () => {
    outputElement.textContent = output;
  });
};

pythonButton.addEventListener("click", () => {
  showLesson(
    "Lesson 1: Hello World",
    "In this lesson, we will learn how to print 'Hello World' in Python.",
    "print('Hello World')",
    "Hello World python"
  );
});

javascriptButton.addEventListener("click", () => {
  showLesson(
    "Lesson 1: Hello World",
    "In this lesson, we will learn how to print 'Hello World' in JavaScript.",
    "console.log('Hello World');",
    "Hello World java"
  );
});

rubyButton.addEventListener("click", () => {
    showLesson(
        "Lesson 1: Hello World",
        "In this lesson, we will learn how to print 'Hello World' in JavaScript.",
        "console.log('Hello World');",
        "Hello World ruby"
      );
    });
