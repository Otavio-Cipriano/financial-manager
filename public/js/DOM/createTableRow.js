import convertTableDate from "../helpers/convertTableDate.js";

export default function createTableRow(data){
    const row = `<tr>
                    <td>${convertTableDate(data.date)}</td>
                    <td>Despesa ${data.type}</td>
                    <td>Previsto ${data.category}</td>
                    <td>${data.briefing}</td>
                    <td>${data.value}</td>
                    <td class="table-action text-primary" data-bs-toggle="tooltip" data-bs-title="Detalhes"><i class="bi bi-file-earmark-text" ></i></td>
                    <td class="table-action text-warning" data-bs-toggle="tooltip" data-bs-title="Editar"><i class="bi bi-pencil-square"></i></td>
                    <td class="table-action text-danger"><i class="bi bi-trash-fill" data-bs-toggle="tooltip" data-bs-title="Deletar"></i></td>
                </tr>`
    return row;
}