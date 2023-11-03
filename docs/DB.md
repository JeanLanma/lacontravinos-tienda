# Sobre la Base de Datos ( Database )

## Modulo de Teams
Estructura de la base de datos de teams


```json
{
  "teams": {
    "teams": [
      "id:pk",
      "user_id:fk",
      "name:varchar255",
      "personal_team:tinyint:1",
      "timestamps"
    ],
    "team_invitations": [
      "id:pk",
      "team_id:fk",
      "email:varchar255",
      "role:varchar255",
      "timestamps"
    ],
    "team_user": [
      "id:pk",
      "team_id:fk",
      "user_id:fk",
      "role:varchar255",
      "timestamps"
    ]
  }
}
```