<footer class="w-full h-auto">
            <p class="text-center text-[#452464] text-lg">Copyright 2022. All rights reserved.</p>
        </footer>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js" ></script>
    <script>
        AOS.init();
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="ajax-scripts.js"></script>
<script>
let openai_api_key = "YOUR_OPENAI_API_KEY";
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
function toggleChat() {
  document.getElementById('chatbot-container').classList.toggle('hidden');
}

async function sendMessage() {
  const input = document.getElementById('user-input');
  const chatLog = document.getElementById('chat-log');
  const userMessage = input.value;

  if (!userMessage) return;

  chatLog.innerHTML += `<div><strong>You:</strong> ${userMessage}</div>`;
  input.value = '';

  const response = await fetch("https://api.openai.com/v1/chat/completions", {
    method: "POST",
    headers: {
      "Authorization": `Bearer ${openai_api_key}`,
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      model: "gpt-3.5-turbo",
      messages: [{ role: "user", content: userMessage }]
    })
  });

  const data = await response.json();
  const botReply = data.choices?.[0]?.message?.content || "Sorry, I couldn't understand.";

  chatLog.innerHTML += `<div><strong>Bot:</strong> ${botReply}</div>`;
  chatLog.scrollTop = chatLog.scrollHeight;
}
</script>

<div id="chatbot-container" class="fixed bottom-4 right-4 w-80 bg-white border rounded-xl shadow-lg p-4 hidden z-50">
  <div id="chat-log" class="h-60 overflow-y-auto text-sm mb-2"></div>
  <input id="user-input" type="text" placeholder="Ask something..." class="w-full border rounded px-2 py-1" />
  <button onclick="sendMessage()" class="mt-2 w-full bg-blue-500 text-white py-1 rounded">Send</button>
</div>

<button onclick="toggleChat()" class="fixed bottom-4 right-4 bg-blue-600 text-white px-4 py-2 rounded-full z-50">
  💬 Chat
</button>
