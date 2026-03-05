<!DOCTYPE html>
<html>
<body style="font-family: sans-serif; padding: 40px; background: #f8fafc;">
<div style="max-width: 600px; margin: auto; background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    <h1 style="color: #2563eb; font-size: 24px;">🚀 Nouvelle demande de projet</h1>
    <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 20px 0;">
    <p><strong>Nom :</strong> {{ $nom }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Projet :</strong></p>
    <div style="background: #f1f5f9; padding: 16px; border-radius: 8px; color: #475569;">
        {{ $projet }}
    </div>
    <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 20px 0;">
    <p style="color: #94a3b8; font-size: 12px;">Guideon — guideon.contact@gmail.com</p>
</div>
</body>
</html>
