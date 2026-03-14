(function () {
    const area = document.getElementById("messages-area");
    const input = document.getElementById("message-input");
    const form = document.getElementById("message-form");

    if (!area || !input || !form) {
        return;
    }

    const me = area.dataset.userLogin || "";

    function esc(text) {
        return String(text)
            .replaceAll("&", "&amp;")
            .replaceAll("<", "&lt;")
            .replaceAll(">", "&gt;")
            .replaceAll('"', "&quot;")
            .replaceAll("'", "&#039;");
    }

    function refreshMessages() {
        fetch("api.php")
            .then(function (res) {
                return res.json();
            })
            .then(function (messages) {
                let html = "";

                for (const msg of messages) {
                    const mine = (msg.SENDER_LOGIN || "") === me;
                    const deleteBtn = mine
                        ? '<button type="button" class="message-delete-btn color_3" data-delete-id="' +
                          Number(msg.ID_MESSAGE) +
                          '">usun</button>'
                        : "";

                    html +=
                        '<div class="message ' +
                        (mine ? "sent" : "received") +
                        '">' +
                        '<div class="message-header-info">' +
                        '<div class="message-avatar color_placeholder"></div>' +
                        '<span class="message-author">' +
                        esc(msg.IMIE) +
                        " " +
                        esc(msg.NAZWISKO) +
                        "</span>" +
                        deleteBtn +
                        "</div>" +
                        '<div class="message-content">' +
                        esc(msg.CONTENT) +
                        "</div>" +
                        "</div>";
                }

                area.innerHTML = html;
            })
            .catch(function () {});
    }

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const content = input.value.trim();
        if (!content) {
            return;
        }

        const data = new FormData();
        data.append("action", "send_message");
        data.append("content", content);

        fetch("api.php", { method: "POST", body: data })
            .then(function (res) {
                return res.json();
            })
            .then(function () {
                input.value = "";
                refreshMessages();
            })
            .catch(function () {});
    });

    area.addEventListener("click", function (e) {
        const btn = e.target.closest("[data-delete-id]");
        if (!btn) {
            return;
        }

        const messageId = Number(btn.getAttribute("data-delete-id"));
        if (!messageId) {
            return;
        }

        const data = new FormData();
        data.append("action", "delete_message");
        data.append("message_id", String(messageId));

        fetch("api.php", { method: "POST", body: data })
            .then(function (res) {
                return res.json();
            })
            .then(function () {
                refreshMessages();
            })
            .catch(function () {});
    });

    refreshMessages();
})();
