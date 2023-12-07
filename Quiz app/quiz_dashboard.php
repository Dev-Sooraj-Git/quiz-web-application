<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        .question-container {
            text-align: center;
        }

        .question-image {
            max-width: 80%;
            margin: 20px auto;
        }

        .options-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .option {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Quiz Dashboard</h2>
        
        <!-- Question 1 -->
        <div class="question-container">
            <h4>Question 1:</h4>
            <div class="image-preview">
                <img src="question_images/question_1701975606.png" class="img-fluid" alt="Question 1">
            </div>
            
            <!-- Options for Question 1 -->
            <div class="options-container">
                <label class="option">
                    <input type="radio" name="q1" value="A"> Option A
                </label>
                <label class="option">
                    <input type="radio" name="q1" value="B"> Option B
                </label>
                <label class="option">
                    <input type="radio" name="q1" value="C"> Option C
                </label>
                <label class="option">
                    <input type="radio" name="q1" value="D"> Option D
                </label>
            </div>
        </div>
        
        <!-- Repeat similar structure for other questions -->

        <button type="submit" class="btn btn-primary">Submit Answers</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
