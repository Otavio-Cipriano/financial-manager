import convertTableDate from "../helpers/convertTableDate.js";

export default function createTableRow(data){
    const row = `<tr >
                    <td>${convertTableDate(data.date)}</td>
                    <td>Despesa ${data.type}</td>
                    <td>Previsto ${data.category}</td>
                    <td>${data.briefing}</td>
                    <td>${data.value}</td>
                    <td class="table-action text-primary">
                        <i data-index=${data.id} data-name="detail" class="bi bi-file-earmark-text" data-bs-toggle="tooltip" data-bs-title="Detalhes"></i>
                    </td>
                    <td class="table-action text-warning">
                        <i data-index=${data.id} data-name="edit" class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-title="Editar"></i>
                    </td>
                    <td class="table-action text-danger">
                        <i data-index=${data.id} data-name="delet" class="bi bi-trash-fill" data-bs-toggle="tooltip" data-bs-title="Deletar"></i>
                    </td>
                </tr>`
    return row;
}