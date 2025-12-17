# -----------TASK-1-----------
# import datetime
# now=datetime.datetime.now()
# print("current date and time:",now)
# -------------TASK-2-----------
# -------------------------------
# Simple Chatbot using Python
# -------------------------------

# Step 1: Greeting function
def greet():
    print(" ChatBot: Hello! I'm your personal chatbot.")
    print(" ChatBot: Type 'bye' anytime to exit the chat.\n")

# Step 2: Function to get a response
def get_response(user_input):
    user_input = user_input.lower()  # convert to lowercase for easy matching

 # Dictionary of keyword-response pairs
    responses = {
        "hello": "Hi there! Nice to meet you!",
        "hi": "Hello! How can I help you?",
        "how are you": "I'm doing great! Thanks for asking.",
        "what is your name": "I'm PyBot — your simple Python chatbot!",
        "python": "Python is a popular, easy-to-learn programming language.",
        "joke": "Why did the developer go broke? Because he used up all his cache ",
        "quote": "“Code is like humor. When you have to explain it, it’s bad.” — Cory House",
        "bye": "Goodbye! Have a nice day!"
    }

# Step 3: Match keyword
    for keyword in responses:
        if keyword in user_input:
            return responses[keyword]

# Step 4: Default response (if no match)
    return "I'm not sure I understand that. Can you try again?"

# Step 5: Main chatbot function
def chatbot():
    greet()
    while True:
        user_input = input("You: ")
        response = get_response(user_input)
        print(" ChatBot:", response)

        if "bye" in user_input.lower():
            break

# Run the chatbot
if __name__== "_main_":
    chatbot()