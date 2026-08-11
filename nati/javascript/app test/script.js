// Banco de preguntas de JavaScript
const questionBank = [
  {
    question: "¿Cuál es el resultado de `typeof NaN` en JavaScript?",
    options: ["'number'", "'NaN'", "'undefined'", "'object'"],
    correct: 0
  },
  {
    question: "¿Qué método se usa para añadir un elemento al final de un Array?",
    options: ["push()", "pop()", "unshift()", "append()"],
    correct: 0
  },
  {
    question: "¿Qué palabras clave permiten declarar variables con alcance de bloque (block scope)?",
    options: ["var y let", "let y const", "var y const", "Solo var"],
    correct: 1
  },
  {
    question: "¿Cuál es la salida de `console.log(2 + '2')`?",
    options: ["4", "22", "NaN", "TypeError"],
    correct: 1
  },
  {
    question: "¿Qué operador realiza una comparación estricta de valor y tipo?",
    options: ["==", "=", "===", "=="],
    correct: 2
  },
  {
    question: "¿Qué devuelve el método `Array.prototype.map()`?",
    options: [
      "Modifica el array original",
      "Un nuevo array con los resultados de la función",
      "Un valor booleano",
      "El primer elemento que cumpla la condición"
    ],
    correct: 1
  },
  {
    question: "¿Cómo se crea una Promesa resuelta en JavaScript?",
    options: [
      "new Promise().accept()",
      "Promise.complete()",
      "Promise.resolve()",
      "Promise.fulfill()"
    ],
    correct: 2
  }
];

// Variables de estado
let currentQuestions = [];
let currentQuestionIndex = 0;
let score = 0;

// Elementos del DOM
const questionEl = document.getElementById("question-text");
const optionsContainer = document.getElementById("options-container");
const progressEl = document.getElementById("progress");
const scoreEl = document.getElementById("score-counter");
const nextBtn = document.getElementById("next-btn");
const quizCard = document.getElementById("quiz-card");

// Mezclar array (Algoritmo Fisher-Yates)
function shuffleArray(array) {
  const shuffled = [...array];
  for (let i = shuffled.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
  }
  return shuffled;
}

// Inicializar o reiniciar el test
function startQuiz() {
  // Selecciona 5 preguntas aleatorias del banco
  currentQuestions = shuffleArray(questionBank).slice(0, 5);
  currentQuestionIndex = 0;
  score = 0;
  scoreEl.textContent = `Puntos: ${score}`;
  nextBtn.style.display = "none";
  showQuestion();
}

// Mostrar pregunta actual
function showQuestion() {
  resetState();
  const currentQ = currentQuestions[currentQuestionIndex];
  
  progressEl.textContent = `Pregunta ${currentQuestionIndex + 1}/${currentQuestions.length}`;
  questionEl.textContent = currentQ.question;

  currentQ.options.forEach((option, index) => {
    const button = document.createElement("button");
    button.textContent = option;
    button.classList.add("option-btn");
    button.addEventListener("click", () => selectOption(index, currentQ.correct));
    optionsContainer.appendChild(button);
  });
}

// Limpiar opciones anteriores
function resetState() {
  nextBtn.style.display = "none";
  optionsContainer.innerHTML = "";
}

// Manejar selección de respuesta
function selectOption(selectedIndex, correctIndex) {
  const buttons = optionsContainer.querySelectorAll(".option-btn");
  
  // Deshabilitar todos los botones tras responder
  buttons.forEach((btn, idx) => {
    btn.disabled = true;
    if (idx === correctIndex) {
      btn.classList.add("correct");
    }
  });

  if (selectedIndex === correctIndex) {
    score++;
    scoreEl.textContent = `Puntos: ${score}`;
  } else {
    buttons[selectedIndex].classList.add("incorrect");
  }

  // Mostrar botón "Siguiente" o "Ver resultados"
  if (currentQuestionIndex < currentQuestions.length - 1) {
    nextBtn.textContent = "Siguiente";
  } else {
    nextBtn.textContent = "Ver Resultados";
  }
  nextBtn.style.display = "block";
}

// Avanzar a la siguiente pregunta
nextBtn.addEventListener("click", () => {
  currentQuestionIndex++;
  if (currentQuestionIndex < currentQuestions.length) {
    showQuestion();
  } else {
    showResults();
  }
});

// Mostrar pantalla final
function showResults() {
  quizCard.innerHTML = `
    <div class="results">
      <h2>¡Test Completado!</h2>
      <p>Tu puntuación final es de <strong>${score}</strong> de <strong>${currentQuestions.length}</strong></p>
      <button class="restart-btn" onclick="location.reload()">Reintentar con nuevas preguntas</button>
    </div>
  `;
}

// Arrancar la aplicación al cargar
startQuiz();